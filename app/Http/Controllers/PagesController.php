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
        $totalNumberOfSales = DB::table('sales')
                ->where('deleted', 0)
                ->count();
        $totalBakerySales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 1]
                    ])
                ->count();
        $totalWaterSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 2]
                    ])
                ->count();
        $totalLaundrySales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['unit_id', 3]
                    ])
                ->count();
        
        // Credit Sales
        $numberOfCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 1]
                    ])
                ->count();

        $numberOfBakeryCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 1]
                    ])
                ->count();
        $numberOfWaterCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 2]
                    ])
                ->count();
        $numberOfLaundryCreditSales = DB::table('sales')
                ->where([
                    ['deleted', 0],
                    ['is_credit', 1],
                    ['unit_id', 3]
                    ])
                ->count();

        return view('admin.dashboard')->with([
            'totalNumberOfSales' => $totalNumberOfSales,
            'totalBakerySales' => $totalBakerySales,
            'totalWaterSales' => $totalWaterSales,
            'totalLaundrySales' => $totalLaundrySales,
            'numberOfCreditSales' => $numberOfCreditSales,
            'numberOfBakeryCreditSales' => $numberOfBakeryCreditSales,
            'numberOfWaterCreditSales' => $numberOfWaterCreditSales,
            'numberOfLaundryCreditSales' => $numberOfLaundryCreditSales,
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
