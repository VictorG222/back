<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Amiibos extends Controller
{
    public function Obtener()
    {
        $response = Http::get('https://amiiboapi.com/api/amiibo/');

        $amiibos = $response->json();

        return view('amiibo');
    }
}
