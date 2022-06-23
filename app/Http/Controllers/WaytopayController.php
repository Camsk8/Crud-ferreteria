<?php

namespace App\Http\Controllers;

use App\Models\Waytopay;
use Illuminate\Http\Request;

class WaytopayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waytopays = Waytopay::simplePaginate(2);
        return view('Waytopay.index',compact('waytopays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('waytopay/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $waytopay = new Waytopay;
        $waytopay->nombre=$request->nombre;
        $waytopay->descripcion=$request->descripcion;
        $waytopay->save();
        return redirect()->route('waytopay.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Waytopay  $waytopay
     * @return \Illuminate\Http\Response
     */
    public function show(Waytopay $waytopay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Waytopay  $waytopay
     * @return \Illuminate\Http\Response
     */
    public function edit(Waytopay $waytopay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Waytopay  $waytopay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waytopay $waytopay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waytopay  $waytopay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waytopay $waytopay)
    {
        //
    }
}
