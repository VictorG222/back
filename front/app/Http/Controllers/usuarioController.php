<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    //

    public function index()
    {
        $response = Http::get("http://127.0.0.1:8001/api/usuarios");
        $usuarios = $response->json()['data'];
        return view('livewire.usuarios');
        // return view('usuario',compact('usuarios'));
    }
}
