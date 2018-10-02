<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Perfiles extends Model
{
    protected $table = "otb_perfil";
    public $timestamps = false;

    protected $fillable = ['fecha', 'nombre', 'id_grupo'];

    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos', 'id_grupo');
    }

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }
}
