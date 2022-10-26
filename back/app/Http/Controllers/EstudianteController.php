<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //

    public function listar(){

        $total_estudiantes_masculinos_becados = Estudiante::where('becado', '=', 'true')
        ->where('genero','Male')
        ->count();


        $total_estudiantes_femeninos_becados = Estudiante::where('becado', '=', 'true')
        ->where('genero','Female')
        ->count();


        $total_estudiantes_masculinos_no_becados = Estudiante::where('becado', '=', 'false')
        ->where('genero','Female')
        ->count();


        $total_estudiantes_femeninos_no_becados = Estudiante::where('becado', false)
        ->where('genero','Female')
        ->count();


        $registros_estudiantes_masculinos_por_fecha = Estudiante::where('genero','Male')
        ->get()
        ->sortBy('asc');

        $registros_estudiantes_femeninos_por_fecha = Estudiante::where('genero','Female')
        ->get()
        ->sortBy('desc');


        $respuesta = [
            $total_estudiantes_masculinos_becados,
            $total_estudiantes_femeninos_becados,
            $total_estudiantes_masculinos_no_becados,
            $total_estudiantes_femeninos_no_becados,
            $registros_estudiantes_masculinos_por_fecha,
            $registros_estudiantes_femeninos_por_fecha

        ];

        return response($respuesta);


    }
}
