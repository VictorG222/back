<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EstadoShow extends Component
{
    public $idEstado;
    public function mount($id)
    {
        $this->idEstado = $id;
    }

    public function render()
    {
        $estado = Http::get('http://127.0.0.1:8001/api/estados-globales/'.$this->idEstado)->json();
        return view('livewire.estado-show',compact('estado'));
    }
}
