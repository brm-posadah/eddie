<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Usuarios_Ots extends Model
{
    protected $table = "otb_usuarios_ot";
    public $timestamps = false;

    protected $fillable = [
        'id_orde_trabajo', 'id_usuario', 'finalizado'
    ];

    public function orden_trabajo(){
        return $this->belongsTo('App\Otb_Ordenes_Trabajos');
    }

    public function usuario_responsable(){
        return $this->belongsTo('App\Otb_Usuarios');
    }
}
