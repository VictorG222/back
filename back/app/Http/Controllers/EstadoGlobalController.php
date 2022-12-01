<?php

namespace App\Http\Controllers;

use App\Models\EstadoGlobal;
use Illuminate\Http\Request;

class EstadoGlobalController extends Controller
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

        $usuario = EstadoGlobal::create($data);

        return response([
            'message'=> 'Se creo con exito el usuario',
            'id' => $usuario['id']
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
     * @param  \App\Models\EstadoGlobal  $estadoGlobal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $estadoGlobal = EstadoGlobal::all();
        return $estadoGlobal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstadoGlobal  $estadoGlobal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estadoGlobal = EstadoGlobal::find($id);
        if(!$estadoGlobal){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateEstadoGlobal());

        $estadoGlobal->update($data);

        return response([
            'message'=>'Se modifico el estado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstadoGlobal  $estadoGlobal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estadoGlobal = EstadoGlobal::find($id);
        if(!$estadoGlobal){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $estadoGlobal->delete();

        return response([
            'message'=>'Estado Eliminado'
        ]);
    }










    private function validateEstadoGlobal()
    {
        return [
            'descripcion'=>'required|string',
        ];
    }




}
