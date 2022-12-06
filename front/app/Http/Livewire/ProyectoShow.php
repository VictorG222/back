<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProyectoShow extends Component
{
    public $idProyecto;
    public function mount($id)
    {
        $this->idProyecto = $id;
    }

    public function render()
    {
        $proyecto = Http::get('http://127.0.0.1:8001/api/proyectos/'.$this->idProyecto)->json();
        return view('livewire.proyecto-show',compact('proyecto'));
    }
}
