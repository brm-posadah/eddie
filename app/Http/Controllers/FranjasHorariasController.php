<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Franjas_Horarias;

class FranjasHorariasController extends Controller
{
    public function index(){
        $franjas = Otb_Franjas_Horarias::orderBy('id', 'ASC')->paginate(5);
        return $franjas;
    }

    public function getAllFranjas(){
        $all_franjas = Otb_Franjas_Horarias::all();
        return $all_franjas;
    }

    public function addFranjas(Request $request){
        $add_franjas = Otb_Franjas_Horarias::create($request->all());
        return $add_franjas;
    }

    public function getFranjas($id){
        $find_franjas = Otb_Franjas_Horarias::find($id);
        return $find_franjas;
    }

    public function editFranjas(Request $request, $id){
        $edit_franjas = $this->getFranjas($id);
        $edit_franjas->fill($request->all());
        $edit_franjas->save();
        return $edit_franjas;
    }

    public function deleteFranjas($id){
        $del_franjas = $this->getFranjas($id);
        $del_franjas->delete();
        return $del_franjas;
    }
}
