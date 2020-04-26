<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Tipo_vehiculoFormResquest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Tipo_vehiculo;
use DB;
class Tipo_vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_vehiculo =Tipo_vehiculo::all();
        return view('Tipo_vehiculo.index')->with('tipo_vehiculo',$tipo_vehiculo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('Tipo_vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tipo_vehiculoFormResquest $request)
    {
        $tipo_vehiculo=new Tipo_vehiculo;
        $tipo_vehiculo->nombre=$request->get('nombre');
        $tipo_vehiculo->descripcion=$request->get('descripcion');
        $tipo_vehiculo->save();
        return Redirect::to('tipo_vehiculo');

        
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
        $tipo_vehiculo=Tipo_vehiculo::findOrFail($id);
        return view("Tipo_vehiculo.edit",["tipo_vehiculo"=>$tipo_vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tipo_vehiculoFormResquest $request, $id)
    {
        $tipo_vehiculo=Tipo_vehiculo::findOrFail($id);
        $tipo_vehiculo->nombre=$request->get('nombre');
        $tipo_vehiculo->descripcion=$request->get('descripcion');
        $tipo_vehiculo->update();
        return Redirect::to('tipo_vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_vehiculo=Tipo_vehiculo::findOrFail($id);
        $tipo_vehiculo->delete();
        return Redirect::to('tipo_vehiculo');
    }
}
