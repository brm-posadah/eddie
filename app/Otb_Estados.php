<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Estados extends Model
{
    protected $table = "otb_estado";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'estado', 'color'
    ];

    public function ordenes_trabajos(){
        return $this->hasMany('App\Otb_Ordenes_Trabajos', 'id');
    }

    public function historicos_ots(){
        return $this->hasMany('App\Otb_Historicos_Ots', 'id');
    }
}
