<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculos';
    public $timestamps = false;
 protected $fillable = ['placa', 'tipo', 'modelo'];


}
