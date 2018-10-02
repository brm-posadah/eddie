<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otb_grupos extends Model
{
    protected $table = "otb_grupo";
    public $timestamps = false;

    protected $fillable = ['fecha', 'nombre', 'id_area'];

    public function area(){
        return $this->belongsTo('App\Otb_Areas', 'id_area');
    }

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }

    public function perfiles(){
        return $this->hasMany('App\Otb_Perfiles', 'id');
    }

    public function tipos_ots(){
        return $this->hasMany('App\Otb_Tipos_Ots', 'id');
    }
}
