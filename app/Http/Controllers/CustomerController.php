<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $customers = Customer::where('name', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $customers = Customer::paginate(5);
        }
        // $customers = Customer::orderBy('id', 'asc')->paginate(5);
        return view('customer.index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'NIK' => 'required|unique:customers|max:255',
            'name' => 'required|max:255',
            'alamat' => 'required|unique:customers|max:255',
            'nomer_hp' => 'required|unique:customers|max:255',
            'email' => 'required|unique:customers|max:255',
        ]);

        $customer = Customer::create($request->all());
        return redirect('customer')->with('status', 'Customer Added Successfully');
    }

    public function show($slug)
    {
        $customer = Customer::where('slug', $slug)->first();
        return view('customer.show', ['customer' => $customer]);
    }

    public function edit($slug)
    {
        $customer = Customer::where('slug', $slug)->first();
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $customer = Customer::where('slug', $slug)->first();
        $customer->slug = null;
        $customer->update($request->all());
        return redirect('customer')->with('status', 'Customer Updated Successfully');
    }

    public function delete($slug)
    {
        $customer = Customer::where('slug', $slug)->first();
        return view('customer.delete', ['customer' => $customer]);
    }

    public function destroy($slug)
    {
        $customer = Customer::where('slug', $slug)->first();
        $customer->delete();
        return redirect('customer')->with('status', 'Customer Deleted Successfully');
    }
}
