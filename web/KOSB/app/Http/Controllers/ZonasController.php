<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zonas;

class ZonasController extends Controller
{
    public function getZonas(){
        $zonas=Zona::all();
        return $zonas;
    }

    public function crearZonas(Request $request){
        $input = $request->all();
        $zona =new Zona();
        $zona->nom_rubro = $input["nom_rubro"];
        $zona->cod_admin = $input["cod_admin"];
        $zona->fecha_edicion = $input["fecha_edicion"];

        $zona->save();
        return $zona;
    }

    public function actualizarZonas(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $zona = Zona::findOrFail($id);
        $zona->nom_rubro = $input["nom_rubro"];
        $zona->cod_admin = $input["cod_admin"];
        $zona->fecha_edicion = $input["fecha_edicion"];
        $zona->save();
        return $zona; 
    }

    public function eliminarZonas(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $zona = Zona::findOrFail($id);
        $zona->delete();
        return "ok";
        
    }
}
