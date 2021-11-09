<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubro;

class RubrosController extends Controller
{
    public function getRubros(){
        $rubro=Rubro::all();

        return $rubro;
    }
}
