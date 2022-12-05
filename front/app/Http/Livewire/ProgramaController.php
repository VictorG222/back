<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramaController extends Component
{
    public function render()
    {
        $programasJSON = Http::get('http://127.0.0.1:8000/api/programas')->json();
        $programas = $programasJSON['data'];
        return view('livewire.programa-controller', compact('programas'));
    }

}
