<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function obtener()
    {
        $usuarios = Venta::paginate();
        return $usuarios;
    }


    public function crear(Request $request)
    {
        $data = $request->validate($this->validateRequest());

        $venta = Venta::create($data);

        return response([
            'message'=> 'Se creo con exito la venta',
            'id' => $venta['id']
        ], 201);
    }

    public function eliminar($id)
    {
        $venta = Venta::find($id);
        if(!$venta){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $venta->delete();

        return response([
            'message'=>'Venta Eliminada'
        ]);
    }

    public function modificar($id,Request $request)
    {
        $venta = Venta::find($id);
        if(!$venta){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateRequest());

        $venta->update($data);

        return response([
            'message'=>'Se modifico la venta'
        ]);
    }


    private function validateRequest()
    {
        return [
            'id_usuario'=>'required|exists:usuarios,id',
            'id_producto'=>'required|exists:productos,id',
            'fecha_compra'=>'required|date',
        ];
    }



}
