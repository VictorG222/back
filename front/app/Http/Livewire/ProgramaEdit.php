<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramaEdit extends Component
{

    public $datos = [];
    public $errores = [];
    public $idPrograma;

    public function mount($id)
    {
        $this->idPrograma = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/programas/' . $id)->json();
    }

    public function render()
    {
        return view('livewire.programa-edit');
    }

    public function modificar()
    {
        $response = Http::withHeaders(['Accept'=>'Application/json'])
        ->put('http://127.0.0.1:8000/api/programas/' . $this->idPrograma, $this->datos);
        if ($response->successful()) {
            $this->emit('Success', 'Se modifico con exito');
            return redirect('/programas');
        } else {
            $this->errores = $response->json();
        }
    }
}
