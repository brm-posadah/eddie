<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Clientes;
use App\Otb_Marcas;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Otb_Clientes::with('ciudad')->orderBy('id', 'ASC')->paginate(5);
        return $clientes;
    }

    public function getAllClientes(){
        $all_clientes = Otb_Clientes::all();
        return $all_clientes;
    }

    public function addClientes(Request $request){
        $add_cliente = Otb_Clientes::create($request->all());
        return $add_cliente;
    }

    public function getClientes($id){
        $find_cliente = Otb_Clientes::find($id);
        return $find_cliente;
    }

    public function editClientes(Request $request, $id){
        $edit_cliente = $this->getClientes($id);
        $edit_cliente->fill($request->all());
        $edit_cliente->save();
        return $edit_cliente;
    }

    public function deleteClientes($id){
        $del_cliente = $this->getClientes($id);
        $del_cliente->delete();
        return $del_cliente;
    }
}
