<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Franjas_Horarias extends Model
{
    protected $table = "otb_franja_horaria";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'franja_horaria', 'hora_inicio', 'hora_fin'
    ];

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }

    public function franjas_horarias(){
        return $this->hasMany('App\Otb_Ordenes_Trabajos', 'id');
    }
}
