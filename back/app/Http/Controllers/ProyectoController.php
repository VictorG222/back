<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //


        $data = $request->validate($this->validateCrearProyecto());

        $proyecto = Proyecto::create($data);

        return response([
            'message'=> 'Se creo con exito el proyecto',
            'id' => $proyecto['id']
        ], 201);




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        //
        $proyecto = Proyecto::with('programa:id,nombre')->get();
        return $proyecto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proyecto = Proyecto::find($id);
        if($proyecto!=null){
            return response($proyecto,200);

        }
        return response('No se encontro el proyecto', 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $proyecto = Proyecto::find($id);
        if(!$proyecto){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateCambiarProyecto());

        $proyecto->update($data);

        return response([
            'message'=>'Se modifico el proyecto'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto, $id)
    {
        //
        $proyecto = Proyecto::find($id);
        if(!$proyecto){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $proyecto->delete();

        return response([
            'message'=>'Proyecto Eliminado'
        ]);
    }





    private function validateCrearProyecto()
    {
        return [
            'nombre'=>'required|string',
            'clave'=>'required|string|unique:proyectos',
            'programa_id'=>'required|exists:programas,id',
            'estados_globales'=>'required|exists:estado_globals,id'
        ];
    }


    private function validateCambiarProyecto()
        {
            return [
                'nombre'=>'string',
                'clave'=>'string|unique:proyectos',
                'programa_id'=>'exists:programas,id',
                'estados_globales'=>'exists:estado_globals,id'
            ];
        }
}
