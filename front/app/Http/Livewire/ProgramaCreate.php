<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProgramaCreate extends Component
{
    public $datos = [];
    public $errores = [];

    public function render()
    {
        return view('livewire.programa-create');
    }

    public function guardar()
    {

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8000/api/programas', $this->datos);

        // dd($response->json());

        if ($response->successful()) {
            $this->emit('Success', 'Se creo con exito');
            return redirect('/programa');
        } else{
            // dd($response->json());
            $this->errores = $response->json();
        }
    }
}
