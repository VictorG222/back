<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProyectoController extends Component
{
    public $idProyecto;
    public $listeners = ['delete'];


    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/proyectos');
        $proyectos = $response->json();
        return view('livewire.proyecto-controller', compact('proyectos'));
    }

    public function ConfirmarDelete($id)
    {
        $this->idProyecto = $id;
        Http::delete('http://127.0.0.1:8001/api/proyectos/'.$this->idProyecto);

    }

}
