<?php

namespace App\Http\Controllers;

use App\Otb_Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index(){
        $estados = Otb_Estados::orderBy('id', 'ASC')->paginate(5);
        return $estados;
    }

    public function getAllEstados(){
        $all_estados = Otb_Estados::all();
        return $all_estados;
    }

    public function addEstados(Request $request){
        $add_estados = Otb_Estados::create($request->all());
        return $add_estados;
    }

    public function getEstados($id){
        $find_estados = Otb_Estados::find($id);
        return $find_estados;
    }

    public function editEstados(Request $request, $id){
        $edit_estados = $this->getEstados($id);
        $edit_estados->fill($request->all());
        $edit_estados->save();
        return $edit_estados;
    }

    public function deleteEstados($id){
        $del_estados = $this->getEstados($id);
        $del_estados->delete();
        return $del_estados;
    }
}
