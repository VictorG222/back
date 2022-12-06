<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProyectoEdit extends Component
{

    public $datos = [];
    public $errores = [];
    public $idProyecto;

    public function mount($id)
    {
        $this->idProyecto = $id;
        $this->datos = Http::get('http://127.0.0.1:8001/api/proyectos/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.proyecto-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8001/api/proyectos/' . $this->idProyecto, $this->datos);
        if ($response->successful()) {
            // $this->emit('success', 'Se modifico con exito');
            return redirect('/proyecto');
        } else {
            $this->errores = $response->json();
        }
    }
}
