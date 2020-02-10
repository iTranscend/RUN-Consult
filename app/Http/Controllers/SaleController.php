<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Customer;
use DB;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of all normal sales.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = DB::select('SELECT sales.id AS saleID, sales.quantity AS quantity, sales.created_at AS saleTime, products.name AS productName, prices.price AS productPrice, users.firstname AS userFirstName, users.lastname AS userLastName, customers.name AS customerName, sale_type.name AS saleType, customer_type.name AS customerType FROM products JOIN products_prices prices ON prices.product_id = products.id JOIN sales ON sales.product_price_id = prices.id JOIN users ON sales.user_id = users.id JOIN customers ON customers.id = sales.customer_id JOIN sale_type ON sales.sale_type_id = sale_type.id JOIN customer_type ON customer_type.id = prices.customer_type_id');

        return view('admin.sales')->with('sales', $sales);
    }

    /**
     * Show credit sales.
     *
     * @return \Illuminate\Http\Response
     */
    public function creditSales()
    {
        $creditSales = DB::select('SELECT sales.id AS saleID, sales.quantity AS quantity, sales.created_at AS saleTime, products.name AS productName, prices.price AS productPrice, users.firstname AS userFirstName, users.lastname AS userLastName, customers.name AS customerName, sale_type.name AS saleType, customer_type.name AS customerType 
        FROM products 
        JOIN products_prices prices ON prices.product_id = products.id 
        JOIN sales ON sales.product_price_id = prices.id 
        JOIN users ON sales.user_id = users.id 
        JOIN customers ON customers.id = sales.customer_id 
        JOIN sale_type ON sales.sale_type_id = sale_type.id 
        JOIN customer_type ON customer_type.id = prices.customer_type_id 
        WHERE sales.is_credit = 1');

        return view('admin.credit-sales')->with('creditSales', $creditSales);
    }

    /**
     * Verify that a sale made on credit has been paid for
     * 
     */
    public function verifyCreditSale($id) {
        $sale = Sale::find($id);
        $sale->is_credit = !$sale->is_credit;
        $sale->save();

        return redirect('/credit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
