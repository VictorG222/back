<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //
    public function crear(){
        return 'Usuario Creado';
    }

    public function modificar($expediente){
        return 'Usuario modificado ' . $expediente;
    }

    public function obtener(){
        return 'Usuario obtenido';
    }

    public function eliminar($expediente){
        return 'Usuario eliminado ' . $expediente;
    }
}
