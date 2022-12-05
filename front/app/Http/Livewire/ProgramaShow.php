<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramaShow extends Component
{
    public $idPrograma;
    public function mount($id){
        $this->idPrograma = $id;
    }

    public function render()
    {
        $programa = Http::get('http://127.0.0.1:8000/api/programas/'.$this->$idPrograma)->json();
        return view('livewire.programa-show', compact('programa'));
    }
}
