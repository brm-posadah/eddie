<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Accesos;

class AccesosController extends Controller
{
    public function index(){
        $accesos = Otb_Accesos::all();
        return $accesos;
    }
}
