<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vehiculo;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\VehiculoFormRequest;
use DB;

class VehiculoController extends Controller
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
    public function index(Request $request)
    {
        if ($request)
        {
        $query=trim($request->get('searchText'));
        $vehiculos=DB::table('vehiculos')->where('placa','LIKE','%'.$query.'%')
        ->orderBy('id','desc')
        ->paginate(5);
        return view('Vehiculo.index',["vehiculos"=>$vehiculos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    $request->user()->authorizeRoles('admin');
        return view('Vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoFormRequest $request)
    {
        $vehiculo=new Vehiculo;
        $vehiculo->placa=$request->get('placa');
        $vehiculo->tipo=$request->get('tipo');
        $vehiculo->modelo=$request->get('modelo');
        $vehiculo->save();
        return Redirect::to('vehiculo');
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
    public function edit(Request $request, $id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        return view("Vehiculo.edit",["vehiculo"=>$vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoFormRequest $request, $id)
    {
        $vehiculo=new Vehiculo;
        $vehiculo->placa=$request->get('placa');
        $vehiculo->tipo=$request->get('tipo');
        $vehiculo->modelo=$request->get('modelo');
        $vehiculo->update();
        return Redirect::to('vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return Redirect::to('vehiculo');
    }
}
