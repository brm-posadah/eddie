<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Ordenes_Trabajos extends Model
{
    protected $table = "otb_orden_trabajo";
    public $timestamps = false;

    protected $fillable = [
        'identificador', 'fecha', 'id_estado', 'titulo',
        'descripcion', 'fecha_inicio', 'fecha_fin', 'id_cliente',
        'id_marca', 'id_grupo', 'id_tipo_ot', 'tiempo_asignado',
        'id_usuario_crea', 'id_franja_horaria',
        'tiempo_gastado', 'fecha_cierre'
    ];

    public function historicos_ots(){
        return $this->hasMany('App\Otb_Historicos_Ots', 'id');
    }

    public function usuarios_ots(){
        return $this->hasMany('App\Otb_Usuarios_Ots');
    }

    public function urls_ot(){
        return $this->hasMany('App\Otb_Urls_Ots', 'id');
    }

    public function estado(){
        return $this->belongsTo('App\Otb_Estados', 'id_estado');
    }

    public function cliente(){
        return $this->belongsTo('App\Otb_Clientes', 'id_cliente');
    }

    public function marca(){
        return $this->belongsTo('App\Otb_Marcas', 'id_marca');
    }

    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos', 'id_grupo');
    }

    public function tipo_ot(){
        return $this->belongsTo('App\Otb_Tipos_Ots', 'id_tipo_ot');
    }

    public function usuario_crea(){
        return $this->belongsTo('App\Otb_Usuarios', 'id_usuario_crea');
    }

    public function franja_horaria(){
        return $this->belongsTo('App\Otb_Franjas_Horarias', 'id_franja_horaria');
    }
}
