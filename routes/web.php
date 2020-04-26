<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('vehiculo', 'VehiculoController');
Route::resource('cliente', 'ClienteController');
Route::resource('tarifa','TarifaController');
Route::resource('tipo_vehiculo','Tipo_vehiculoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
