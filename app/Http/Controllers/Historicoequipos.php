<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoequiposController extends Controller
{
    // TODOS Activos GET
    public function historialxequiposget($user_id){  
        $data = DB::select("CALL SP_GET_HISTORICOFUTBOLISTAS(".$user_id.")");

        echo "<pre>";
        print_r($data);
    }
}