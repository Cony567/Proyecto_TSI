<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionesController extends Controller
{

    public function getPublicaciones(){
        $publicaciones = Publicacion::all();
        return $publicaciones;
    }
    public function crearPublicacion(Request $request){
        $input = $request->all();
        $publicacion = new Publicacion();
        $publicacion->titulo_publicacion=$input["titulo_publicacion"];
        $publicacion->cod_rubro=$input["cod_rubro"];
        $publicacion->fecha_ini=$input["fecha_ini"];
        $publicacion->fecha_fin=$input["fecha_fin"];
        $publicacion->fecha_publicada=$input["fecha_publicada"];
        $publicacion->cod_duracion=$input["cod_duracion"];
        $publicacion->cod_zona=$input["cod_zona"];
        $publicacion->descripcion=$input["descripcion"];
        $publicacion->tipo_oferta=$input["tipo_oferta"];
        $publicacion->cod_usuario=$input["cod_usuario"];

        $publicacion->save();
        return $publicacion;

    }

}
