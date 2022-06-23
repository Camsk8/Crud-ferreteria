<?php

namespace App\Http\Controllers;

use App\Models\promotions;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = promotions::simplePaginate(10);
        return view('Promotions.index',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotions = new promotions();
        $promotions ->nombres = $request->nombres;
        $promotions ->descripcion = $request->descripcion;
        $promotions ->precio = $request->precio;
        $promotions ->save();
        return redirect()->route('employee.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function show(promotions $promotions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotions=promotions::findOrFail($id);
        return view ('Promotions.edit',compact('promotions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $promotions=promotions::findOrFail($id);
        $promotions ->nombres = $request-> input ('nombres');
        $promotions ->descripcion = $request -> input('descripcion');
        $promotions ->precio = $request->input('precio');
        $promotions ->save();
        return redirect()->route('promotions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\promotions  $promotions
     * @return \Illuminate\Http\Response
     */
    public function destroy(promotions $promotions)
    {
        //
    }
}
