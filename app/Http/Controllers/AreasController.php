<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Areas;
use App\Otb_Ciudades;
use App\Otb_Usuarios;

class AreasController extends Controller
{
    public function index(){
        $areas = Otb_Areas::with('ciudad', 'usuario_jefe')->orderBy('id', 'ASC')->paginate(5);
        return $areas;
    }

    public function getAllAreas(){
        $all_areas = Otb_Areas::all();
        return $all_areas;
    }

    public function addAreas(Request $request){
        $add_areas = Otb_Areas::create($request->all());
        return $add_areas;
    }

    public function getAreas($id){
        $find_areas = Otb_Areas::find($id);
        return $find_areas;
    }

    public function editAreas(Request $request, $id){
        $edit_areas = $this->getAreas($id);
        $edit_areas->fill($request->all());
        $edit_areas->save();
        return $edit_areas;
    }

    public function deleteAreas($id){
        $del_areas = $this->getAreas($id);
        $del_areas->delete();
        return $del_areas;
    }
}
