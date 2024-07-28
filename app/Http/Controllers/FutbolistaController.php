<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FutbolistaController extends Controller
{
    // TODOS Activos GET
    public function futbolistaAGet(){
        $usersData = DB::select('CALL SP_GET_FutbolistasACTIVE()');
        
        echo "<pre>";
        print_r($usersData);
    }

    //Un Futbolista
    public function futbolistaGetUnique($user_id){  
        $data = DB::select("CALL SP_GET_Futbolistas(".$user_id.")");

        echo "<pre>";
        print_r($data);
    }

    //Ins Futbolista
    public function futbolistains(Request $request){
        $nombre = $request->input('Nombre');
        $apellido = $request->input('Apellido');
        $numerocamisa = $request->input('Numero_Camisa');
        $fechanacimiento = $request->input('Fecha_Nacimiento');
        $fecharetiro = $request->input('Fecha_Retiro');

        DB::statement("CALL SP_INS_Futbolistas(?, ?, ?, ?, ?)", [
            $nombre,
            $apellido,
            $numerocamisa,
            $fechanacimiento,
            $fecharetiro
        ]);
        return "Futbolista se a creado con exito";
    }

    // UPD Futbolista
    public function futbolistaupd(Request $request){
        $id = $request->input('ID');
        $nombre = $request->input('Nombre');
        $apellido = $request->input('Apellido');
        $numerocamisa = $request->input('Numero_Camisa');
        $fechanacimiento = $request->input('Fecha_Nacimiento');
        $fecharetiro = $request->input('Fecha_Retiro');
        
        
        DB::statement("CALL SP_UPD_Futbolistas(?, ?, ?, ?, ?, ?)", [
            $id,
            $nombre,
            $apellido,
            $numerocamisa,
            $fechanacimiento,
            $fecharetiro
        ]);
        return "Futbolista actualizado";
    }

    // DELETE Futbolista
    public function futbolistadel(Request $request){
        $id = $request->input('ID');
        
        DB::statement("CALL SP_DEL_Futbolistas(?)", [
            $id
        ]);
        return "Futbolista Eliminado";
    }
}