<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Areas extends Model
{
    protected $table = "otb_area";
    public $timestamps = false;

    protected $fillable = ['fecha', 'nombre', 'id_ciudad', 'id_usuario_jefe'];

    public function grupos(){
        return $this->hasMany('App\Otb_Grupos', 'id');
    }

    public function ciudad(){
        return $this->belongsTo('App\Otb_Ciudades', 'id_ciudad');
    }

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }

    public function usuario_jefe(){
        return $this->belongsTo('App\Otb_Usuarios', 'id_usuario_jefe');
    }
}
