<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duracion;
class DuracionesController extends Controller
{
    public function getDuraciones(){
        $duraciones=Duracion::all();
        return $duraciones;
    }

    public function crearDuracion(Request $request){
        $input = $request->all();
        $duracion =new Duracion();
        $duracion->nom_rubro = $input["nom_rubro"];
        $duracion->cod_admin = $input["cod_admin"];
        $duracion->fecha_edicion = $input["fecha_edicion"];

        $duracion->save();
        return $duracion;
    }

    public function actualizarDuracion(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $duracion = Duracion::findOrFail($id);
        $duracion->nom_rubro = $input["nom_rubro"];
        $duracion->cod_admin = $input["cod_admin"];
        $duracion->fecha_edicion = $input["fecha_edicion"];
        $duracion->save();
        return $duracion; 
    }

    public function eliminarDuracion(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $duracion = Duracion::findOrFail($id);
        $duracion->delete();
        return "ok";
        
    }
}
