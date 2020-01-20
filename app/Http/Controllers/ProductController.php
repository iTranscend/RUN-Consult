<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('deleted', false)->get();
        $product_categories = ProductCategory::where('deleted', false)->get();
        return view('admin.products')->with('products', $products)->with('categories', $product_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->product_category_id = $request->input('product_category_id');
        $product->save();

        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('')->with('product', $product);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::find($id);
        return view('')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->product_category_id = $request->input('product_category_id');
        $product->save();

        return rediret('/products')->with('success', 'Product Updated');
    }

    // Make the specified resource active or inactive
    public function toggleStatus($id)
    {
        $product = Product::find($id);
        $product->is_active = !$product->is_active;
        $product->save();

        return redirect('/products')->with('success', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::find($id);
        $product->deleted = !$product->deleted;
        $product->save();

        return redirect('/products')->with('error', 'Product deleted');
    }
}
