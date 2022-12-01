<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = $request->validate($this->validateEstadoGlobal());

        $programa = Programa::create($data);

        return response([
            'message'=> 'Se creo con exito el usuario',
            'id' => $programa['id']
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
        $programa = Programa::with('proyectos:id,nombre')->get();
        return $programa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $programa = Programa::find($id);
        if(!$programa){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateCambiarPrograma());

        $programa->update($data);

        return response([
            'message'=>'Se modifico el programa'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa, $id)
    {
        //

        $programa = Programa::find($id);
        if(!$programa){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $programa->delete();

        return response([
            'message'=>'Programa Eliminado'
        ]);
    }


    private function validateCrearPrograma()
    {
        return [
            'nombre'=>'required|string',
            'descripcion'=>'required|string',
            'clave'=>'required|string|unique:programa',
            'vigencia_de_inicio'=>'required|date|',
            'vigencia_de_fin'=>'required|date|',
            'unidad_responsable'=>'required|exists:areas,id',
            'estados_globales_id'=>'required|exists:estados_globals,id'
        ];
    }


    private function validateCambiarPrograma()
        {
            return [
                'nombre'=>'string',
                'descripcion'=>'string',
                'clave'=>'string|unique:programa',
                'vigencia_de_inicio'=>'date',
                'vigencia_de_fin'=>'date',
                'unidad_responsable'=>'exists:areas,id',
                'estados_globales_id'=>'exists:estados_globals,id'
            ];
        }
}
