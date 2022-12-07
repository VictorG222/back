<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EstadoController extends Component
{
    public $idEstado;
    public $listeners = ['delete'];


    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/estados-globales');
        $estados = $response->json();
        return view('livewire.estado-controller', compact('estados'));
    }

    public function ConfirmarDelete($id)
    {
        $this->idEstado = $id;
        Http::delete('http://127.0.0.1:8001/api/estados-globales/'.$this->idEstado);

    }
}
