<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Sale;
use DB;
use Validator;
use Cart;
use Illuminate\Http\Request;

class MakeSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::where('deleted', false)->get();
        $products = DB::select('SELECT prodprice.id AS productPriceID, prodprice.price AS productPrice, prod.name AS productName, ctype.name AS customerType FROM products prod JOIN products_prices prodprice ON prod.id = prodprice.product_id JOIN customer_type ctype ON prodprice.customer_type_id = ctype.id');

        Cart::session('user');
        
        return view('make-sale')->with([
            'customers' => $customers,
            'products' => $products,
            'cart' => Cart::getContent(),
        ]);
    }

    /**
     * Add an entry to the cart
     * 
     * 
     */
    public function addToCart(Request $request) {
        Cart::session('user');
        // Collecting the necessary cart values for product id, name and price as comma seperated values from the frontend
        $productDetailsCSV = $request->product;

        // Using the explode function to split the values to get an array containing id, name and price
        $productDetails = explode(",", $productDetailsCSV);

        $productID = $productDetails[0];
        $productName = $productDetails[1];
        $productPrice = $productDetails[2];
        // return $productDetails;

        Cart::add(array(
            'id' => $productID,
            'price' => $productPrice,
            'quantity' => (int)$request->quantity,
            'name' => $productName,
            'attributes' => array(
                'customerID' => $request->customer,
                'isCredit' => $request->isCredit,
                'saleType' => $request->saleType,
            )
        ));

        return redirect('/make-sale');
        // $customers = Customer::where('deleted', false)->get();
        // $products = DB::select('SELECT prodprice.id AS productPriceID, prodprice.price AS productPrice, prod.name AS productName, ctype.name AS customerType FROM products prod JOIN products_prices prodprice ON prod.id = prodprice.product_id JOIN customer_type ctype ON prodprice.customer_type_id = ctype.id');

        // return view('make-sale')->with([
        //     'customers' => $customers,
        //     'products' => $products,
        //     'cart' => Cart::getContent(),
        // ]);
    }

    /**
     * Delete a product from the cart
     * 
     * 
     */
    public function deleteFromCart($item) {
        Cart::session('user');
        
        Cart::remove($item);

        // $customers = Customer::where('deleted', false)->get();
        // $products = DB::select('SELECT prodprice.id AS productPriceID, prodprice.price AS productPrice, prod.name AS productName, ctype.name AS customerType FROM products prod JOIN products_prices prodprice ON prod.id = prodprice.product_id JOIN customer_type ctype ON prodprice.customer_type_id = ctype.id');

        // return redirect('/make-sale')->with([
        //     'customers' => $customers,
        //     'products' => $products,
        //     'cart' => Cart::getContent(),
        // ]);
        return redirect('/make-sale');
    }
    
    /**
     * View the content in the cart
     * 
     * 
     */
    public function viewCart(Request $request) {
        Cart::session('user');
        $content = Cart::getContent();
        print("<pre>".($content)."<pre>");
        // return $it;
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
        Cart::session('user');
        $cart = Cart::getContent();
        
        foreach ($cart as $item) {
            $sale = new Sale;
            $sale->product_price_id = $item->id;
            $sale->quantity = $item->quantity;
            $sale->is_credit = $item->attributes->isCredit;
            $sale->unit_id = session('unit_id');
            $sale->user_id = session('user');
            $sale->customer_id = $item->attributes->customerID;
            $sale->sale_type_id = $item->attributes->saleType;

            $sale->save();
        }

        Cart::session('user')->clear();
        return redirect('/make-sale');
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
