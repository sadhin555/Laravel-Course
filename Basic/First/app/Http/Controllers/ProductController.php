<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('backend.product.index',compact('products'));
    }
    public function create()
    {
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required","unique:products,name"],
            "price" => ["required"]
        ]);

        $product = Product::create([
            "name" => $request->name,
            "slug" => Str::slug($request->name,"-"),
            "price" => $request->price,
        ]);
        if($product){
            session()->flash("message","Product Added Successfully!");
            session()->flash("type","success");
            return redirect()->route('product.index');
        }
    }

    public function view(Product $product)
    {
        return $product;
    }

    public function delete(Product $product)
    {
        $product->delete();
        session()->flash("message","Product Deleted Successfully!");
        session()->flash("type","success");
        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        return view('backend.product.edit',compact('product'));
    }

    public function update(Request $request,Product $product)
    {
        $request->validate([
            "name" => ["required","unique:products,name,{$product->id}"],
            "price" => ["required"]
        ]);

       $product = $product->update([
            "name" => $request->name,
            "slug" => Str::slug($request->name,"-"),
            "price" => $request->price,
        ]);

        if($product){
            session()->flash("message","Product Updated Successfully!");
            session()->flash("type","success");
            return redirect()->route('product.index');
        }
    }
}
