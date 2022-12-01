<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $numero = 0;
    public $nombre = '';
    public $activo = true;
    public function render()
    {
        return view('livewire.contador');
    }

    public function sumar(){
        $this->numero++;

    }

    public function restar(){
        $this->numero--;

        if ($this->numero < 0){
            $this->numero == 0;
        }else{

        }

    }


    public function cambio(){
        $this->activo = !$this->activo;

    }
}
