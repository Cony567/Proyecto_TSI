<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function create_page(){
        return view('register.crear_perfil');
    }
    
    public function getUsuarios(){
        $usuarios = Usuario::all();
        return $usuarios;
    }
    public function eliminarUsuario(){}
    public function crearUsuario()
    {
       
        $atribute = request()->validate([
            'nombre'=> 'required|max:50|min:3',
            'apellido'=> 'required|max:50|min:2',
            'mail'=> 'required|email|max:100',
            'num-tel'=> 'required',
            'pass'=> 'required|min:8|max:50',
        ]);

        dd('success validation succeeded');
        /*
        $usuario->nom_usuario = $input["nom_usuario"];
        $usuario->sexo = $input["sexo"];
        $usuario->fecha_nac = $input["fecha_nac"];
        $usuario->correo = $input["correo"];
        $usuario->fecha_registro = $input["fecha_registro"];
        $usuario->contrasenia = $input["contrasenia"];
        $usuario->estado = 0;
        $usuario->save();*/

    }
   
}
