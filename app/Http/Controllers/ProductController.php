<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all();

        return view('products.products-index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('products'));
    }
    public function create()
    {
        return view('sign-up.cadastrar');
    }
    public function store(Request $request) 
    {
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $imageRequest = $request->image;
            
            $extension = $imageRequest->extension();

            $imageName = md5($imageRequest->getClientOriginalName(). strtotime('now')) . '.' . $extension;

            $imageRequest->move(public_path('/img/products'), $imageName);

            $product->image = $imageName;  
            
        } else {
            return back()->with('error', 'Invalid image or no image provided');
        }
        $product->save();
        
        return redirect('/products');

    }
}
