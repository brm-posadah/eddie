<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Roles extends Model
{
    protected $table = "otb_rol";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'rol'
    ];

    public function usuarios(){
        return $this->hasMany('App\Otb_Usuarios_Detalles', 'id');
    }
}
