<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Subtipos_Ots extends Model
{
    protected $table = "otb_subtipo_ot";

    protected $fillable = [
        'fecha', 'subtipo', 'id_tipos_ot'
    ];

    public function tipos_ot(){
        return $this->belongsTo('App\Otb_Tipos_Ots');
    }

    public function ordenes_trabajos(){
        return $this->hasMany('App\Otb_Ordenes_Trabajos');
    }

}
