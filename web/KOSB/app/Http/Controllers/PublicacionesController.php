<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionesController extends Controller
{
    public function getPublicaciones(){
        $publicaciones = Publicacion::all();
        return publicaciones;
    }

    public function crearPublicacion(Request $request){
        $input = $request->all();
        return 'OK';
    }
}
