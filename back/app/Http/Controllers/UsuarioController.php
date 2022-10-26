<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function obtener()
    {
        // todos los usuarios sin paginacion
        // $usuarios = Usuario::all();

        // registros paginados
        $usuarios = Usuario::paginate();

        // contar usuarios
        // $usuarios = Usuario::count();

        // filtrado where
        // $usuarios = Usuario::where('edad','>','80')
        // ->orderBy('edad', 'asc')
        // ->orderBy('nombre', 'desc')
        // ->get();

        // filtrado first
        // $usuarios = Usuario::where('id','=', 10)->first();

        // sumar todas las edades
        // $usuarios = Usuario::sum('edad');

        // mostrar solo ciertos datos
        // $usuarios = Usuario::Select('nombre','email')->take(5)->get();

        // todos los usuarios menores a 18
        // $usuarios = Usuario::where('edad', '>', 0)
        // ->orderBy('edad', 'asc')
        // ->where('edad', '<', 18)
        // ->get();

        return $usuarios;
    }

    public function crear(Request $request)
    {
        $data = $request->validate($this->validateRequest());

        $usuario = Usuario::create($data);

        return response([
            'message'=> 'Se creo con exito el usuario',
            'id' => $usuario['id']
        ], 201);
    }

    public function eliminar($id)
    {
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                'message'=>'No encontrado'
            ],404);
        };

        $usuario->delete();

        return response([
            'message'=>'Usuario Eliminado'
        ]);
    }

    public function modificar($id,Request $request)
    {
        $usuario = Usuario::find($id);
        if(!$usuario){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        $data = $request->validate($this->validateRequest());

        $usuario->update($data);

        return response([
            'message'=>'Se modifico el usuario'
        ]);
    }




    public function login(Request $request)
    {

        $data = $request->validate($this->validateLogin());

        $usuario = Usuario::where('email', '=', $request['email'])
        ->where('password', '=', $request['password'])
        ->first();
        if(!$usuario){
            return response([
                'message'=>'No encontrado'
            ],404);
        }

        return response([
            'message'=>'Ta bien'
        ]);

    }













    private function validateRequest()
    {
        return [
            'nombre'=>'required|string',
            'email'=>'required|string|email|unique:usuarios',
            'password'=>'required|string|min:8',
            'edad'=>'nullable|numeric|max:100',
        ];
    }

    private function validateLogin()
    {
        return [
            'email'=>'required|string|email|unique:usuarios',
            'password'=>'required|string|min:8',
        ];
    }

}
