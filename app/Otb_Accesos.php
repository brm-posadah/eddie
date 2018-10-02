<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Accesos extends Model
{
    protected $table = "otb_acceso";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'acceso'
    ];

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }
}
