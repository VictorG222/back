<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProgramaShow extends Component
{
    public $programa;
    public function mount($id)
    {
        $this->programa = Http::get('http://127.0.0.1:8000/api/programas/'. $id)->json();
    }

    public function render()
    {
        return view('livewire.programa-show');
    }
}
