<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Ciudades;
use App\Otb_Regionales;
use App\Helpers\Recursos;

class CiudadesController extends Controller
{
    public function index(){
        $ciudades = Otb_Ciudades::with('regional')->orderBy('id', 'ASC')->paginate(5);
        return $ciudades;
    }

    public function getAllCiudades(){
        $all_ciudades = Otb_Ciudades::all();
        return $all_ciudades;
    }

    public function addCiudades(Request $request){
        $add_ciudades = Otb_Ciudades::create($request->all());
        return $add_ciudades;
    }

    public function getCiudades($id){
        $find_ciudad = Otb_ciudades::find($id);
        return $find_ciudad;
    }

    public function editCiudades(Request $request, $id){
        $edit_ciudades = $this->getCiudades($id);
        $edit_ciudades->fill($request->all());
        $edit_ciudades->save();
        return $edit_ciudades;
    }

    public function deleteCiudades($id){
        $del_ciudades = $this->getCiudades($id);
        $del_ciudades->delete();
        return $del_ciudades;
    }

    public function getC($id){
        $relacion_ciudad = Otb_Ciudades::where('id_regional', '=', $id)->get();
        return $relacion_ciudad;
    }
}
