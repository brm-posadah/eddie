<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Otb_Usuarios extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "otb_usuario";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'nombre', 'usuario', 'contrasena',
        'correo', 'priv_admin', 'activo', 'logueado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasena', 'remember_token',
    ];

    public function usuario(){
        return $this->hasOne('App\Otb_Usuarios_Detalles', 'id');
    }

    public function orden_trabajo_crea(){
        return $this->hasMany('App\Otb_Ordenes_Trabajos', 'id');
    }

    public function orden_trabajo_responsable(){
        return $this->hasMany('App\Otb_Usuarios_Ots', 'id');
    }

    public function historicos_ots(){
        return $this->hasMany('App\Otb_Historicos_Ots', 'id');
    }
}

