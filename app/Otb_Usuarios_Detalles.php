<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Usuarios_Detalles extends Model
{
    protected $table = "otb_usuario_detalle";
    public $timestamps = false;
    protected  $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_usuario', 'id_rol','id_area', 'id_ciudad', 'id_grupo',
        'id_perfil', 'id_franja_horaria', 'id_cliente'
    ];

    public function usuario(){
        return $this->belongsTo('App\Otb_Usuarios', 'id_usuario');
    }

    public function rol(){
        return $this->belongsTo('App\Otb_Usuarios', 'id_rol');
    }

    public function area(){
        return $this->belongsTo('App\Otb_Areas', 'id_area');
    }

    public function ciudad(){
        return $this->belongsTo('App\Otb_Ciudades', 'id_ciudad');
    }

    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos', 'id_grupo');
    }

    public function perfil(){
        return $this->belongsTo('App\Otb_Perfiles', 'id_perfil');
    }

    public function franja_horaria(){
        return $this->belongsTo('App\Otb_Franjas_Horarias', 'id_franja_horaria');
    }

    public function cliente(){
        return $this->belongsTo('App\Otb_Clientes', 'id_cliente');
    }

}
