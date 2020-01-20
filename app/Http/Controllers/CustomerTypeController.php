<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerType;

class CustomerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerTypes = CustomerType::where('deleted', false)->get();
        return view('admin.customer-type')->with('customer_types', $customerTypes);
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
        $customer_type = new CustomerType;
        $customer_type->name = $request->input('name');
        $customer_type->save();

        return redirect('/customer-type')->with('success', 'Customer Type Created');
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
     * Deactivate the specified customer type
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function toggleStatus($id) {
        $customer_type = User::find($id);
        $customer_type->is_active = !$customer_type->is_active;
        $customer_type->save();
        
        return redirect('')->with('success', 'Status Changed');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer_type = CustomerType::find($id);
        $customer_type->deleted = !$customer_type->deleted;
        $customer_type->save();

        return redirect('/customer-type')->with('danger', 'You have successfully deleted the customer type');
    }
}
