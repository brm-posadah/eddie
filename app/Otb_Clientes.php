<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Clientes extends Model
{
    protected $table = "otb_cliente";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'nombre', 'direccion', 'telefono',
        'correo', 'activo', 'id_ciudad'
    ];

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }

    public function ciudad(){
        return $this->belongsTo('App\Otb_Ciudades', 'id_ciudad');
    }

    public function marcas(){
        return $this->hasMany('App\Otb_Marcas', 'id');
    }
}
