<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // $result = DB::raw('SELECT sales.quantity * prices.price AS totalSales FROM sales JOIN products_prices prices ON prices.product_id = sales.product_price_id;');
        // $row = mysqli_fetch_assoc($result);
        // $totalSales = $row['totalSales'];

        $totalNumberOfSales = DB::table('sales')
                ->where('deleted', 0)
                ->count();

        // $totalBakerySales = DB::select('');
        $numberOfBakerySales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 1]
                    ])
                ->count();
        
        // $totalWaterSales = DB::select('');
        $numberOfWaterSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 2]
                    ])
                ->count();
        
        // $totalLaundrySales = DB::select('');
        $numberOfLaundrySales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 3]
                    ])
                ->count();
        
        // Credit Sales
        // $totalCreditSales = DB::select('');
        $numberOfCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 1]
                    ])
                ->count();

        // $totalBakeryCreditSales = DB::select('');
        $numberOfBakeryCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 1]
                    ])
                ->count();

        // $totalWaterCreditSales = DB::select('');
        $numberOfWaterCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 2]
                    ])
                ->count();

        // $totalLaundryCreditSales = DB::select('');
        $numberOfLaundryCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 3]
                    ])
                ->count();

        $sales = DB::select('SELECT sales.id AS saleID, sales.quantity AS quantity, sales.created_at AS saleTime, sales.is_credit AS isCredit, products.name AS productName, prices.price AS productPrice, users.firstname AS userFirstName, users.lastname AS userLastName, customers.name AS customerName, sale_type.name AS saleType, customer_type.name AS customerType FROM products JOIN products_prices prices ON prices.product_id = products.id JOIN sales ON sales.product_price_id = prices.id JOIN users ON sales.user_id = users.id JOIN customers ON customers.id = sales.customer_id JOIN sale_type ON sales.sale_type_id = sale_type.id JOIN customer_type ON customer_type.id = prices.customer_type_id LIMIT 5');

        return view('admin.dashboard')->with([
            'totalNumberOfSales' => $totalNumberOfSales,
            'numberOfBakerySales' => $numberOfBakerySales,
            'numberOfWaterSales' => $numberOfWaterSales,
            'numberOfLaundrySales' => $numberOfLaundrySales,
            'numberOfCreditSales' => $numberOfCreditSales,
            'numberOfBakeryCreditSales' => $numberOfBakeryCreditSales,
            'numberOfWaterCreditSales' => $numberOfWaterCreditSales,
            'numberOfLaundryCreditSales' => $numberOfLaundryCreditSales,
            // 'totalSales' => $totalSales,
            'sales' => $sales,
            ]);
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
        //
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
