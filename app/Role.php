<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =['nombre','description'];

    public function users()
    {
    return $this->belongsToMany('App\User')->withTimestamps();
    }

}
