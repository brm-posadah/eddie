<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Historicos_Ots extends Model
{
    protected $table = "otb_historico_ot";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'id_estado', 'comentario', 'tiempo_gastado',
        'url', 'id_orden_trabajo', 'id_usuario_comenta'
    ];

    public function estado(){
        return $this->belongsTo('App\Otb_Estados','id_estado');
    }

    public function orden_trabajo(){
        return $this->belongsTo('App\Otb_Ordenes_Trabajos', 'id_orden_trabajo');
    }

    public function usuario_comenta(){
        return $this->belongsTo('App\Otb_Usuarios');
    }
}
