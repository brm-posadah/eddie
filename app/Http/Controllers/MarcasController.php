<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Marcas;


class MarcasController extends Controller
{
    public function index(){
        $marcas = Otb_Marcas::with('ciudad', 'cliente')->orderBy('id', 'ASC')->paginate(5);
        return $marcas;
    }

    public function getAllMarcas(){
        $all_marcas = Otb_Marcas::all();
        return $all_marcas;
    }

    public function addMarcas(Request $request){
        $add_marcas = Otb_Marcas::create($request->all());
        return $add_marcas;
    }

    public function getMarcas($id){
        $find_marcas = Otb_Marcas::find($id);
        return $find_marcas;
    }

    public function editMarcas(Request $request, $id){
        $edit_marcas = $this->getMarcas($id);
        $edit_marcas->fill($request->all());
        $edit_marcas->save();
        return $edit_marcas;
    }

    public function deleteMarcas($id){
        $del_marcas = $this->getMarcas($id);
        $del_marcas->delete();
        return $del_marcas;
    }

    public function getM($id){
        $response = Otb_Marcas::where('id_cliente', '=', $id)->get();
        return $response;
    }
}
