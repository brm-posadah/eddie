<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Regionales extends Model
{
    protected $table = "otb_regional";
    public $timestamps = false;

    protected $fillable = ['fecha', 'nombre', 'id_regional'];

    public function ciudades(){
        return $this->hasMany('App\Otb_Ciudades', 'id');
    }
}
