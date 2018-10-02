<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Tipos_Ots;

class TiposOtsController extends Controller
{
    public function index(){
        $tiposots = Otb_Tipos_Ots::with('grupo')->orderBy('id', 'ASC')->paginate(5);
        return $tiposots;
    }

    public function getAllTipos(){
        $all_tiposots = Otb_Tipos_Ots::all();
        return $all_tiposots;
    }

    public function addTipos(Request $request){
        $add_tiposots = Otb_Tipos_Ots::create($request->all());
        return $add_tiposots;
    }

    public function getTipos($id){
        $find_tiposots = Otb_Tipos_Ots::find($id);
        return $find_tiposots;
    }

    public function editTipos(Request $request, $id){
        $edit_tiposots = $this->getTipos($id);
        $edit_tiposots->fill($request->all());
        $edit_tiposots->save();
        return $edit_tiposots;
    }

    public function deleteTipos($id){
        $del_tiposots = $this->getTipos($id);
        $del_tiposots->delete();
        return $del_tiposots;
    }

    public function getT($id){
        $relacion_tipos = Otb_Tipos_Ots::where('id_grupo', '=', $id)->get();
        return $relacion_tipos;
    }
}
