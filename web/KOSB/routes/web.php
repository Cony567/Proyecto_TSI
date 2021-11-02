<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view("/","home")->name("home");
Route::view("/buscar_trabajo","buscar_trabajo")->name("buscar_trabajo");
Route::view("/crear_publicacion","crear_publicacion")->name("crear_publicacion");
Route::view("/crear_perfil","crear_perfil")->name("crear_perfil");
Route::view("/perfil_publicaciones","perfil_publicaciones")->name("perfil_publicaciones");
Route::view("/perfil", "perfil")->name("perfil");
Route::get("/inicio_sesion",[UsuariosController::class, "create_page"]);

Route::post("usuarios/create",[UsuariosController::class, "crearUsuario"]);
Route::get("usuarios/get",[UsuariosController::class, "getUsuarios"]);