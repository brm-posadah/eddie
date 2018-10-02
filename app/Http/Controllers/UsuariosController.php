<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Usuarios;
use App\Otb_Usuarios_Detalles;
use App\Http\Controllers\UsuariosDetallesController;
use Cookie;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Otb_Usuarios::orderBy('id', 'ASC')->paginate(5);
        return $usuarios;
    }

    public function getAllUsuarios(){
        $all_usuarios = Otb_Usuarios::all();
        return $all_usuarios;
    }

    public function addUsuarios(Request $request){
        $add_usuarios = new Otb_Usuarios();
        $add_usuarios->nombre = $request->nombre;
        $add_usuarios->usuario = $request->usuario;
        $add_usuarios->contrasena = bcrypt($request->contrasena);
        $add_usuarios->correo = $request->correo;
        $add_usuarios->priv_admin = $request->priv_admin;
        $add_usuarios->activo = $request->activo;
        $add_usuarios->save();
        $idusuario  = $add_usuarios->id;
        $add_detalles = new Otb_Usuarios_Detalles();
        $add_detalles->id_usuario = $idusuario;
        $add_detalles->id_acceso = $request->id_acceso;
        $add_detalles->id_area = $request->id_area;
        $add_detalles->id_ciudad = $request->id_ciudad;
        $add_detalles->id_grupo = $request->id_grupo;
        $add_detalles->id_perfil = $request->id_perfil;
        $add_detalles->id_franja_horaria = $request->id_franja_horaria;
        $add_detalles->id_cliente = $request->id_cliente;
        $add_detalles->save();
        return $add_detalles;
    }

    public function getUsuarios($id){
        $find_usuarios = Otb_Usuarios::find($id);
        return $find_usuarios;
    }

    public function editUsuarios(Request $request, $id){
        $edit_usuarios = $this->getUsuarios($id);
        $edit_usuarios->fill($request->all());
        $edit_usuarios->save();
        return $edit_usuarios;
    }

    public function deleteUsuarios($id){
        $del_usuarios = $this->getUsuarios($id);
        $del_usuarios->delete();
        return $del_usuarios;
    }
}
