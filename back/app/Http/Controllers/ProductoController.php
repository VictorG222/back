<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function obtener()
    {
        $productos = Producto::all();
        return response($productos, 200);
    }






    public function obtenerUnoSolo($id){
        $producto = Producto::find($id);
        if($producto!=null){
            return response($producto,200);

        }
        return response('No se encontro el producto', 404);

    }






    public function crear(Request $request)
    {
        $data = $request->validate($this->validateRequest());

        $producto = Producto::create($data);

        return response([
            'message'=> 'Se creo con exito el producto',
            'id' => $producto['id']
        ], 201);
    }






    public function eliminar($id)
    {
        $producto = Producto::find($id);
        if(!$producto){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $producto->delete();

        return response([
            'message'=>'Producto Eliminado'
        ]);
    }







    public function modificar($id,Request $request)
    {
        $producto = Producto::find($id);
        if(!$producto){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateRequest());

        $producto->update($data);

        return response([
            'message'=>'Se modifico el Producto'
        ]);
    }








    private function validateRequest()
    {
        return [
            'nombre'=>'required|string',
            'cantidad'=>'required|numeric',
            'precio'=>'required|numeric',
            'descripcion'=>'required|string|min:15',
        ];
    }
}
