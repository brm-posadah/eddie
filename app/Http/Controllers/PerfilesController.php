<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Perfiles;

class PerfilesController extends Controller
{
    public function index(){
        $perfiles = Otb_Perfiles::with('grupo')->orderBy('id', 'ASC')->paginate(5);
        return $perfiles;
    }

    public function getAllPerfiles(){
        $all_perfil = Otb_Perfiles::all();
        return $all_perfil;
    }

    public function addPerfiles(Request $request){
        $add_perfil = Otb_Perfiles::create($request->all());
        return $add_perfil;
    }

    public function getPerfiles($id){
        $find_perfil = Otb_Perfiles::find($id);
        return $find_perfil;
    }

    public function editPerfiles(Request $request, $id){
        $edit_perfil = $this->getPerfiles($id);
        $edit_perfil->fill($request->all());
        $edit_perfil->save();
        return $edit_perfil;
    }

    public function deletePerfiles($id){
        $del_perfil = $this->getPerfiles($id);
        $del_perfil->delete();
        return $del_perfil;
    }
 }
