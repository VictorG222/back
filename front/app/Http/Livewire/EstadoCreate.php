<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class EstadoCreate extends Component
{
    public $datos=[
        'descripcion'=>''
    ];

    public function render()
    {
        return view('livewire.estado-create');
    }

    public function guardarEstado(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])
        ->post('http://127.0.0.1:8001/api/estados-globales', $this->datos);


        if ($response->successful()){
            return redirect('/alumnos');
        } else {
            dd('Error');
        }
    }
}
