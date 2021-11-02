<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RubrosController;
use App\Http\Controllers\DuracionesController;
use App\Http\Controllers\ZonasController;
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

//-------RUBRO
Route::get("rubros/get",[RubrosController::class, "getRubros"]);
Route::post("rubros/crear",[RubrosController::class, "crearRubro"]);
Route::post("rubros/eliminar",[RubrosController::class, "eliminarRubro"]);
Route::post("rubros/actualizar",[RubrosController::class, "actualizarRubro"]);

//-------DURACION
Route::get("duraciones/get",[DuracionesController::class, "getDuraciones"]);
Route::post("duraciones/crear",[DuracionesController::class, "crearDuracion"]);
Route::post("duraciones/eliminar",[DuracionesController::class, "eliminarDuracion"]);
Route::post("duraciones/actualizar",[DuracionesController::class, "actualizarDuracion"]);

//-------Zonas
Route::get("zonas/get",[ZonasController::class, "getZonas"]);
Route::post("zonas/crear",[ZonasController::class, "crearZona"]);
Route::post("zonas/eliminar",[ZonasController::class, "eliminarZona"]);
Route::post("zonas/actualizar",[ZonasController::class, "actualizarZona"]);


Route::post("usuarios/create",[UsuariosController::class, "crearUsuario"]);
Route::get("usuarios/get",[UsuariosController::class, "getUsuarios"]);
