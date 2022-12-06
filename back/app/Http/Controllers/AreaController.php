<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $data = $request->validate($this->validateCrearArea());

        $area = Area::create($data);

        return response([
            'message'=> 'Se creo con exito el Area',
            'id' => $area['id']
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
        $area = Area::all();
        return $area;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $area = Area::find($id);
        if($area!=null){
            return response($area,200);

        }
        return response('No se encontro el area', 404);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $area = Area::find($id);
        if(!$area){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateCambiarArea());

        $area->update($data);

        return response([
            'message'=>'Se modifico el area'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $area = Area::find($id);
        if(!$area){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $area->delete();

        return response([
            'message'=>'Area Eliminada'
        ]);
    }






    private function validateCrearArea()
    {
        return [
            'descripcion'=>'required|string',
            'disponible'=>'required|boolean',
            'estados_globales'=>'required|exists:estado_globals,id',
        ];
    }


    private function validateCambiarArea()
        {
        return [
            'descripcion'=>'string',
            'disponible'=>'boolean',
            'estados_globales'=>'exists:estado_globals,id',
        ];
    }

}
