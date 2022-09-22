<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function obtener()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function crear()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function eliminar()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function modificar()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }
}
