<?php

namespace App\Http\Controllers;

use App\Http\Requests;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Tarifa;
use DB;

class TarifaController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifa =Tarifa::all();
        return view('Tarifa.index')->with('tarifa',$tarifa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_vehiculo=DB::table("tipo_vehiculos")
        ->select('nombre','tipo_vehiculos.id')
        ->get();
        return view('Tarifa.create')->with('tipo_vehiculo',$tipo_vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa=new Tarifa;
        $tarifa->tipo_vehiculo_id=$request->get('tipo_vehiculo_id');
        $tarifa->valor=$request->get('valor');
        $tarifa->estado=$request->get('estado');
        $tarifa->save();
        return Redirect::to('tarifa');
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
        $tarifa=Tarifa::findOrFail($id);
        return view("Tarifa.edit",["tarifa"=>$tarifa]);
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
        $tarifa=Tarifa::findOrFail($id);
        $tarifa->tipo_vehiculo_id=$request->get('tipo_vehiculo_id');
        $tarifa->valor=$request->get('valor');
        $tarifa->estado=$request->get('estado');
        $tarifa->update();
        return Redirect::to('tarifa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarifa=Tarifa::findOrFail($id);
        $tarifa->delete();
        return Redirect::to('tarifa');
    }
}
