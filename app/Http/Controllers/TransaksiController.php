<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $transaksins = Transaksi::where('invoice_no', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $transaksins = Transaksi::paginate(5);
        }
        // $transaksins = Transaksi::orderBy('id', 'asc')->paginate(5);
        return view('transaksi.index', ['transaksins' => $transaksins]);
    }

    public function create()
    {
        $customers = Customer::all();
        $cars = Car::all();
        return view('transaksi.create', ['customers' => $customers], ['cars' => $cars]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'invoice_no' => 'required|unique:transaksins|max:255',
            'harga' => 'required|max:10',
        ]);

        $car = Car::findOrFail($request->car_id)->only('status');
        if($car['status'] != 'tersedia'){
            Session::flash('message', 'Tidak Bisa Dirental, Mobil Tidak Tersedia');
            Session::flash('alert-class', 'alert-danger');
            return redirect('transaksi-create');
        }
        else {
            try{
                DB::beginTransaction();
                Transaksi::create($request->all());
                $car = Car::findOrFail($request->car_id);
                $car->status = 'terpakai';
                $car->save();
                DB::commit();

                Session::flash('message', 'Rental Mobil Berhasil, Data Telah Ditambahkan');
                Session::flash('alert-class', 'alert-success');
                return redirect('transaksi');
            } catch (\Throwable $th) {
                DB::rollBack();
            }
        }
    }

    public function edit($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        $customers = Customer::all();
        $cars = Car::all();
        return view('transaksi.edit', ['transaksi' => $transaksi, 'customers' => $customers, 'cars' => $cars]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'harga' => 'required|max:10',
        ]);

        $transaksi = Transaksi::where('id', $id)->where('car_id', $request->car_id)->where('customer_id', $request->customer_id)->get();
        foreach ($transaksi as $val){
            $transaksi_id = $val->id;
        }
        
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'car_id' => $request->car_id ?? $transaksi->car_id,
            'customer_id' => $request->customer_id ?? $transaksi->customer_id,
            'invoice_no' => $request->invoice_no ?? $transaksi->invoice_no,
            'rent_date' => $request->rent_date ?? $transaksi->rent_date,
            'return_date' => $request->return_date ?? $transaksi->return_date,
            'harga' => $request->harga ?? $transaksi->harga,
            'status' => $request->status ?? $transaksi->status
        ]);
        return redirect('transaksi')->with('status', 'Transaksi Updated Successfully');
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return redirect('transaksi')->with('status','data berhasil dihapus');
    }
}
