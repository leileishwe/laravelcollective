<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product= Product::findOrFail($id);
        return view('products.show',['product' => $product]);
    }

    public function create()
    {
        $categories = Category::pluck('name' ,'id')->all();//pluck(vale, key)
        return view('products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
      $image_name = snake_case($request->image->getClientOriginalName());
        $request->image->move('uploads', $image_name);
       $product = Product::create( $request->all() );
       Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'stock' => $request->stock,
        'description' => $request->description,
        'image' => $image_name

        ]);
        $product->categories()->sync( $request->category_id);
        return redirect("products");
     
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('name' ,'id')->all();
        $selected_list = $product->categories()->pluck('id')->all();

        return view('products.edit', ['product' => $product, 'categories' => $categories, 'selected_list' => $selected_list]);
    }

    public function update($id, Request $request)
    {
       $product = Product::findOrFail($id);
        $product->categories()->sync( $request->category_id );
        $product->update( $request->all() );
        return redirect('products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect("products");
    }

}
