<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Grupos;

class GruposController extends Controller
{
    public function index(){
        $grupos = Otb_Grupos::with('area')->orderBy('id', 'ASC')->paginate(5);
        return $grupos;
    }

    public function getAllGrupos(){
        $all_grupos = Otb_Grupos::all();
        return $all_grupos;
    }

    public function addGrupos(Request $request){
        $add_grupos = Otb_Grupos::create($request->all());
        return $add_grupos;
    }

    public function getGrupos($id){
        $find_grupos = Otb_Grupos::find($id);
        return $find_grupos;
    }

    public function editGrupos(Request $request, $id){
        $edit_grupos = $this->getGrupos($id);
        $edit_grupos->fill($request->all());
        $edit_grupos->save();
        return $edit_grupos;
    }
}
