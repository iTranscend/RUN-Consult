<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\Unit;
use Illuminate\Http\Request;
use DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::where('deleted', false)->get();
        $units = Unit::where([
            ['deleted', false],
            ['is_active', true]
        ])->get();
        return view('admin.product-categories')->with('product_categories', $product_categories)->with('units', $units);
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
        $product_category = new ProductCategory;
        $product_category->name = $request->input('name');
        $product_category->unit_id = $request->input('unit');
        $product_category->save();

        return redirect('/product-categories')->with('success', 'Product Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_category = ProductCategory::find($id);
        return view('')->with('product_category', $product_category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_category = ProductCategory::find($id);
        return view('')->with('product_category', $product_category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->name = $request->input('name');
        // $product_category->description = $request->input('description');
        $product_category->unit_id = $request->input('unit_id');
        $product_category->save();

        return view('admin.product-categories')->with('success', 'Product Category Updated');
    }

    // Make the specified resource active or inactive
    public function toggleStatus($id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->is_active = !$product_category->is_active;
        $product_category->save();

        return view('admin.product-categories')->with('success', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->deleted = !$product_category->deleted;
        $product_category->save();

        $product_categories = ProductCategory::where('deleted', false)->get();
        $units = Unit::where('deleted', false)->get();
        return redirect('/product-categories')->with('product_categories', $product_categories)->with('error', 'Product Category deleted')->with('units', $units);
    }
}
