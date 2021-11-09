<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonasController;
use App\Http\Controllers\RubrosController;
use App\Http\Controllers\DuracionesController;
use App\Http\Controllers\PublicacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("zonas/get",[ZonasController::class,"getZonas"]);
Route::get("rubros/get",[RubrosController::class,"getRubros"]);
Route::get("duraciones/get",[DuracionesController::class,"getDuraciones"]);

Route::post("publicaciones/create",[PublicacionesController::class,"crearPublicacion"]);
Route::get("publicaciones/get",[PublicacionesController::class,"getPublicaciones"]);