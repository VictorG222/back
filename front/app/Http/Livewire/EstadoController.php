<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EstadoController extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/estados-globales');
        $estados = $response->json();
        return view('livewire.estado-controller', compact('estados'));
    }
}
