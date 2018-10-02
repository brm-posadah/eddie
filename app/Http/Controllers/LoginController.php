<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Recursos;
use App\Otb_Usuarios;

class LoginController extends Controller
{
    public function getLogin($id){
        $find_login = Otb_Usuarios::find($id);
        return $find_login;
    }

    public function auth(Request $request){
        $log = Otb_Usuarios::all();
        $estado = false;
        foreach ($log as $item){
            if(($request->usuario == $item->usuario or $request->usuario == $item->correo)) {
                if(Hash::check($request->contrasena, $item->contrasena)){
                    if($item->logueado == 0){
                        if($item->activo == 1){
                            $update = $this->getLogin($item->id);
                            $update->logueado = 1;
                            $update->save();
                            $data = array(
                                'id' => $item->id,
                                'priv_admin' => $item->priv_admin,
                                'estado' => '1'
                            );
                        }
                        else{
                            $data = array(
                                'estado' => 'Usuario inactivo'
                            );
                        }
                    }
                    else{
                        $data = array(
                            'estado' => 'Usuario ya logueado'
                        );
                    }
                }
                else{
                    $data = array(
                        'estado' => 'Contraseña incorrecta'
                    );
                }
            }
            else{
                $data = array(
                    'estado' => 'Usuario o correo invalido'
                );
            }
        }
        return $data;
    }

    public function logout($id){
        $logout_usuario = $this->getLogin($id);
        $logout_usuario->logueado = 0;
        $logout_usuario->save();
        $array = array('estado' => '0');
        return $array;
    }
}
