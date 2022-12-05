<?php

namespace App\Http\Livewire;

use Livewire\Component;

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
        ]) -> post('http://127.0.0.1:8000/api/programas');
        if ($response->successful()) {
            return redirect('/programa');
        } else{
            $this->errores = $response->json();
        }
    }
}
