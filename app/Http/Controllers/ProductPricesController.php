<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPrice;
use App\CustomerType;
use App\Product;
use DB;

class ProductPricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = ProductPrice::where('deleted', false)->get();
        $customerTypes = CustomerType::where('deleted', false)->get();
        $products = Product::where('deleted', false)->get();

        $data = DB::select('SELECT prod.name AS productName, prodprice.id, prodprice.price, custype.name AS customerType FROM products prod JOIN products_prices prodprice ON prod.id = prodprice.product_id JOIN customer_type custype ON prodprice.customer_type_id = custype.id WHERE prod.deleted = 0 AND prodprice.deleted = 0 AND custype.deleted = 0');

        return view('admin.product-prices')->with([
            'product_prices' => $prices,
            'customerTypes' => $customerTypes,
            'products' => $products,
            'data' => $data
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productPrice = new ProductPrice;
        $productPrice->product_id = $request->input('product');
        $productPrice->customer_type_id = $request->input('customerType');
        $productPrice->price = $request->input('price');
        
        $productPrice->save();

        $prices = ProductPrice::where('deleted', false)->get();
        $customerTypes = CustomerType::where('deleted', false)->get();
        $products = Product::where('deleted', false)->get();

        $data = DB::select('SELECT prod.name AS productName, prodprice.id, prodprice.price, custype.name AS customerType FROM products prod JOIN products_prices prodprice ON prod.id = prodprice.product_id JOIN customer_type custype ON prodprice.customer_type_id = custype.id WHERE prod.deleted = 0 AND prodprice.deleted = 0 AND custype.deleted = 0');

        return redirect('/product-prices')->with([
            'product_prices' => $prices,
            'customerTypes' => $customerTypes,
            'products' => $products,
            'data' => $data
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
