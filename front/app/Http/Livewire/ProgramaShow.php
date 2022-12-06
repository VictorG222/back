<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProgramaShow extends Component
{
    public $idPrograma;
    public function mount($id)
    {
        $this->idPrograma = $id;
    }

    public function render()
    {
        $programa = Http::get('http://127.0.0.1:8001/api/programas/'.$this->idPrograma)->json();
        return view('livewire.programa-show',compact('programa'));
    }
}
