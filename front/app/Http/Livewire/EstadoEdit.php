<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EstadoEdit extends Component
{
    public $datos = [];
    public $errores = [];
    public $idEstado;

    public function mount($id)
    {
        $this->idEstado = $id;
        $this->datos = Http::get('http://127.0.0.1:8001/api/estados-globales/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.estado-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8001/api/estados-globales/' . $this->idEstado, $this->datos);
        if ($response->successful()) {
            return redirect('/estado');
        } else {
            $this->errores = $response->json();
        }
    }
}
