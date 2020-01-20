<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $units = Unit::where('deleted', false)->get();
        // return redirect('/units')->with('units', $units);
        return view('admin.units');
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
        $unit = new Unit;
        $unit->name = $request->input('name');
        $unit->description = $request->input('description');
        $unit->save();

        return redirect('/units')->with('success', 'Unit Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::find($id);
        return view('')->with('unit', $unit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('')->with('unit', $unit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->name = $request->input('name');
        $unit->description = $request->input('description');
        $unit->save();

        return redirect('/units')->with('success', 'Unit Updated');
    }

    // Make the specified resource active or inactive
    public function toggleStatus($id)
    {
        $unit = Unit::find($id);
        $unit->is_active = !$unit->is_active;
        $unit->save();

        return redirect('/units')->with('success', 'Status Updated');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->deleted = true;
        $unit->save();

        return redirect('/units')->with('error', 'Unit Deleted');
    }
}
