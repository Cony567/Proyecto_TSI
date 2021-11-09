<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;


class ZonasController extends Controller
{
    public function getZonas(){
        $zonas=Zona::all();

        return $zonas;
    }

    /*
    public function crearCategoria(Request $request){
        $input = $request->all();
        $nom_categoria=$input["nom_categoria"];
        $categoria = new Categoria();
        $categoria->nom_categoria=$nom_categoria;
        $categoria->save();


        return $categoria;
    }

    public function eliminarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return "ok";

    }

    public function actualizarCategoria(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $categoria = Categoria::findOrFail($id);
        $categoria->nom_categoria=$input["nom_categoria"];
        $categoria->save();
        return $categoria; 
    }
    */

}
