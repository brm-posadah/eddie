<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Urls_Ots;

class UrlsController extends Controller
{
    public function getUrls($id_ot){
        $find_url = Otb_Urls_Ots::where('id_ot', '=', $id_ot)->get();
        return $find_url;
    }
}
