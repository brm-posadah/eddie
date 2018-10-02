<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Ciudades extends Model
{
    protected $table = "otb_ciudad";
    public $timestamps = false;

    protected $fillable = ['fecha', 'nombre', 'id_regional'];

    public function regional(){
        return $this->belongsTo('App\Otb_Regionales', 'id_regional');
    }

    public function areas(){
        return $this->hasMany('App\Otb_Areas', 'id');
    }

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }

    public function clientes(){
        return $this->hasMany('App\Otb_Clientes', 'id');
    }

    public function marcas(){
        return $this->hasMany('App\Otb_Marcas', 'id');
    }
}
