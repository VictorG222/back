<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AreaController extends Component
{
    public $idArea;
    public $listeners = ['delete'];


    public function render()
    {
        $response = Http::get('http://127.0.0.1:8001/api/areas');
        $areas = $response->json();
        return view('livewire.area-controller', compact('areas'));
    }

    public function ConfirmarDelete($id)
    {
        $this->idArea = $id;
        // dd($this->idArea);
        Http::delete('http://127.0.0.1:8001/api/areas/' . $this->idArea);
    }
}
