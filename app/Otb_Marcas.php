<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Marcas extends Model
{
    protected $table = "otb_marca";
    public $timestamps = false;

    protected $fillable = [
        'fecha', 'nombre', 'direccion', 'telefono',
        'correo', 'activo', 'id_ciudad', 'id_cliente'
    ];

    public function ciudad(){
        return $this->belongsTo('App\Otb_Ciudades', 'id_ciudad');
    }

    public function cliente(){
        return $this->belongsTo('App\Otb_Clientes', 'id_cliente');
    }

    public static function select_marca($id){
        return Otb_Marcas::where('id_cliente', '=', $id)->get();
    }
}
