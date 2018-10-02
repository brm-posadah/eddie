<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Roles;

class RolesController extends Controller
{
    public function index(){
        $roles = Otb_Roles::orderBy('id', 'ASC')->paginate(5);
        return $roles;
    }

    public function getAllRoles(){
        $all_role = Otb_Roles::all();
        return $all_role;
    }

    public function addRoles(Request $request){
        $add_rol = Otb_Roles::create($request->all());
        return $add_rol;
    }

    public function getRoles($id){
        $find_rol = Otb_Roles::find($id);
        return $find_rol;
    }

    public function editRoles(Request $request, $id){
        $edit_rol = $this->getRoles($id);
        $edit_rol->fill($request->all());
        $edit_rol->save();
        return $edit_rol;
    }

    public function deleteRoles($id){
        $del_rol = $this->getRoles($id);
        $del_rol->delete();
        return $del_rol;
    }
}
