<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::where('deleted', false);
        return redirect('/customers')->with('customers', $customers);
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
        $customer = new Product;
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('product_category_id');
        $customer->unit_id = $request->input('unit_id');
        $customer->save();

        return redirect('')->with('success', 'Customer Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customer = Customer::find($id);
        return view('')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('product_category_id');
        $customer->unit_id = $request->input('unit_id');
        $customer->save();

        return redirect('')->with('success', 'Customer Created');
    }

    // Make the specified resource active or inactive
    public function toggleStatus($id)
    {
        $customer = Product::find($id);
        $customer->is_active = !$customer->is_active;
        $customer->save();

        return redirect('/products')->with('success', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Product::find($id);
        $customer->deleted = !$customer->deleted;
        $customer->save();

        return redirect('/customers')->with('error', 'Customer deleted');
    }
}
