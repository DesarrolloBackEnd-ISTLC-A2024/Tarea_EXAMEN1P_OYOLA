<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FutbolistaController;
use App\Http\Controllers\HistoricoequiposController;

Route::get('/', function () {
    return view('welcome');
});


// Futbollistas
//get all
Route::get('/futbolista/get', [FutbolistaController::class, 'futbolistaAGet']);
//get unico
Route::get('/futbolista/getid/{id}', [FutbolistaController::class, 'futbolistaGetUnique']);
//ins
Route::post('/futbolista/ins', [FutbolistaController::class, 'futbolistains']);
Route::get('/formulario/ins', function () {return view('formularioINSFutbolista');});
//upd
Route::post('/futbolista/upd', [FutbolistaController::class, 'futbolistaupd']);
Route::get('/formulario/upd', function () {return view('formularioUPDFutbolista');});
//upd
Route::delete('/futbolista/del', [FutbolistaController::class, 'futbolistadel']);
Route::get('/formulario/del', function () {return view('formularioDELFutbolista');});

// Historial x Equipos
//get unico
Route::get('/historialxequipo/{id}', [HistoricoequiposController::class, 'historialxequiposget']);