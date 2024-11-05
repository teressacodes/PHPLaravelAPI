<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //usually used to do a read of the database and display all product records
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        //make a new product and add it
        $request->validate([
            'name' => 'required',
            'rating' => 'integer|between:1,5'
        ]);
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Product::find($id);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $request->validate([
            'rating' => 'integer|between:1,5'
        ]);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Product::destroy($id);
    }

    public function search(string $name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->get();
    }
}
