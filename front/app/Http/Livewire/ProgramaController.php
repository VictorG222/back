<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProgramaController extends Component
{
    public $idPrograma;
    public $listeners = ['delete'];


    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/programas');
        $programas = $response->json();
        return view('livewire.programa-controller', compact('programas'));
    }

    public function ConfirmarDelete($id)
    {
        $this->idPrograma = $id;
        Http::delete('http://127.0.0.1:8001/api/programas/'.$this->idPrograma);

    }

}
