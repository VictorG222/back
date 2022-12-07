<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AreaCreate extends Component
{
    public $datos = ['disponible' => false];
    public $errores = [];

    public function render()
    {
        return view('livewire.area-create');
    }

    public function guardar()
    {

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ]) -> post('http://127.0.0.1:8001/api/areas', $this->datos);

        if ($response->successful()) {
            return redirect('/area');
        } else{
            $this->errores = $response->json();
        }
    }
}
