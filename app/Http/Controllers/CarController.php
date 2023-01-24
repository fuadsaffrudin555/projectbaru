<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $cars = Car::where('name', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $cars = Car::paginate(5);
        }
        // $cars = Car::orderBy('id', 'asc')->paginate(5);
        return view('car.index', ['cars' => $cars]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('car.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'nomer_lisensi' => 'required|unique:cars|max:255',
            'tahun' => 'required|max:255',
            'harga' => 'required|max:10',
            'denda' => 'required|max:10',
            'warna' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if($image = $request->file( 'image' )) {
            $destinationPath = 'img/';
            $carImage = date( 'YmdHis' ).".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $carImage);
            $input['images'] = "$carImage";
        }

        Car::create($input);
        return redirect('car')->with('status', 'Car Added Successfully');
    }

    public function show($slug)
    {
        $car = Car::where('slug', $slug)->first();
        return view('car.show', ['car' => $car]);
    }

    public function edit($slug)
    {
        $car = Car::where('slug', $slug)->first();
        $categories = Category::all();
        return view('car.edit', ['car' => $car, 'categories' => $categories]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $input = $request->all();
        if($image = $request->file( 'image' )) {
            $destinationPath = 'img/';
            $carImage = date( 'YmdHis' ).".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $carImage);
            $input['images'] = "$carImage";
        } else {
            unset($input['images']);
        }
        
        $car = Car::where('slug', $slug)->first();
        $car->update($input);
        return redirect('car')->with('status', 'Car Updated Successfully');
    }

    public function delete($slug)
    {
        $car = Car::where('slug', $slug)->first();
        return view('car.delete', ['car' => $car]);
    }

    public function destroy($slug)
    {
        $car = Car::where('slug', $slug)->first();
        $car->delete();
        return redirect('car')->with('status', 'car Deleted Successfully');
    }
}
