<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProgramaController extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/programas');
        $programas = $response->json();
        return view('livewire.programa-controller', compact('programas'));
    }

}
