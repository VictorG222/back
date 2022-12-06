<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProyectoCreate extends Component
{
    public $datos = [];
    public $errores = [];

    public function render()
    {
        return view('livewire.proyecto-create');
    }

    public function guardar()
    {

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8001/api/proyectos', $this->datos);

        // dd($response->json());

        if ($response->successful()) {
            // $this->emit('Success', 'Se creo con exito');
            return redirect('/proyecto');
        } else{
            // dd($response->json());
            $this->errores = $response->json();
        }
    }
}
