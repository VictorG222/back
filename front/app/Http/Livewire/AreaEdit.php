<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AreaEdit extends Component
{
    public $datos = ['disponible' => false];
    public $errores = [];
    public $idArea;

    public function mount($id)
    {
        $this->idArea = $id;
        $this->datos = Http::get('http://127.0.0.1:8001/api/areas/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.area-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8001/api/areas/' . $this->idArea, $this->datos);
        if ($response->successful()) {
            return redirect('/area');
        } else {
            $this->errores = $response->json();
        }
    }
}
