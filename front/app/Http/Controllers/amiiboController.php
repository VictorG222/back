<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class amiiboController extends Controller
{
    //
    public function index()
    {
        $response = Http::get("https://www.amiiboapi.com/api/amiibo");
        $amiibos = $response->json()['amiibo'];
        return view('amiibo',compact('amiibos'));
    }
}
