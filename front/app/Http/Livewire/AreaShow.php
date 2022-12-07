<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AreaShow extends Component
{
    public $idArea;
    public function mount($id)
    {
        $this->idArea = $id;
    }

    public function render()
    {
        $area = Http::get('http://127.0.0.1:8001/api/areas/'.$this->idArea)->json();
        return view('livewire.area-show',compact('area'));
    }
}
