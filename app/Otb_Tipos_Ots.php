<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Tipos_Ots extends Model
{
    protected $table = "otb_tipo_ot";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'tipo', 'id_grupo'
    ];

    public function subtipos_ots(){
        return $this->hasMany('App\Otb_Subtipos_Ots', 'id');
    }

    public function ordenes_trabajos(){
        return $this->hasMany('App\Otb_Ordenes_Trabajos', 'id');
    }

    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos', 'id_grupo');
    }

}
