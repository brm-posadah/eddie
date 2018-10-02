<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Regionales;

class RegionalesController extends Controller
{
    public function index(){
        $regionales = Otb_Regionales::orderBy('id', 'ASC')->paginate(5);
        return $regionales;
    }

    public function getAllRegionales(){
        $all_regional = Otb_Regionales::all();
        return $all_regional;
    }

    public function addRegionales(Request $request){
        $add_regional = Otb_Regionales::create($request->all());
        return $add_regional;
    }

    public function getRegionales($id){
        $find_regional = Otb_Regionales::find($id);
        return $find_regional;
    }

    public function editRegionales(Request $request, $id){
        $edit_regional = $this->getRegionales($id);
        $edit_regional->fill($request->all());
        $edit_regional->save();
        return $edit_regional;
    }

    public function deleteRegionales($id){
        $del_regional = $this->getRegionales($id);
        $del_regional->delete();
        return $del_regional;
    }
}
