<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) 
    {
        if($request->has('search')){
            $categories = Category::where('name', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $categories = Category::paginate(5);
        }
        // $categories = Category::orderBy('id', 'asc')->paginate(5);
        return view('Kategori.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('Kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        
        $category = Category::create($request->all());
        return redirect('Category')->with('status', 'Merk Added Successfully');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('Kategori.edit', ['category' => $category]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('Category')->with('status', 'Merk Updated Successfully');
    }

    public function delete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('Kategori.delete', ['category' => $category]);
    }
    
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('Category')->with('status', 'Merk Deleted Successfully');
    }
}
