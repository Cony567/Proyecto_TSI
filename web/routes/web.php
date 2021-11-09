<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonasController;
use App\Models\Zona;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/crear_publicacion', function () {
    return view('crear_publicacion');
})->name('crear_publicacion');

Route::get('/buscar_trabajo', function () {
    return view('buscar_trabajo');
})->name('buscar_trabajo');

Route::get('/crear_perfil', function () {
    return view('crear_perfil');
})->name('crear_perfil');




require __DIR__.'/auth.php';
