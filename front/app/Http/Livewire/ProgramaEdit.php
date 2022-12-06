<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProgramaEdit extends Component
{

    public $datos = [];
    public $errores = [];
    public $idPrograma;

    public function mount($id)
    {
        $this->idPrograma = $id;
        $this->datos = Http::get('http://127.0.0.1:8001/api/programas/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.programa-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8001/api/programas/' . $this->idPrograma, $this->datos);
        if ($response->successful()) {
            // $this->emit('success', 'Se modifico con exito');
            return redirect('/programa');
        } else {
            $this->errores = $response->json();
        }
    }
}
