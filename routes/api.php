<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


route::get('/cliente', [ClienteController::class, 'listar']);
route::post('/cliente', [ClienteController::class, 'criar']);
route::put('/cliente/{id}', [ClienteController::class, 'editar']);
route::delete('/cliente/{id}', [ClienteController::class, 'excluir']);
route::get('/cliente/{id}', [ClienteController::class, 'exibirPeloId']);