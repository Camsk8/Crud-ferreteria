<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::simplePaginate(5);
        return view('Services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = new services();
        $services ->nombre = $request->nombre;
        $services ->descripcion = $request->descripcion;
        $services ->tiempo_max = $request->tiempo_maximo;
        $services ->costo_extra = $request->costo_extra;
        $services ->clave = $request->clave;
        $services ->save();
        return redirect()->route('services.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $services=Services::findOrFail($id);
        return view ('Services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $services=Services::findOrFail($id);
        $services ->nombre = $request-> input ('nombre');
        $services ->descripcion = $request -> input('descripcion');
        $services ->tiempo_max = $request->input('tiempo_max');
        $services ->costo_extra = $request->input('costo_extra');
        $services ->clave = $request->input('clave');
        $services ->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
