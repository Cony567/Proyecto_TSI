<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duracion;

class DuracionesController extends Controller
{
    public function getDuraciones(){
        $duracion=Duracion::all();

        return $duracion;
    }
}
