<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Testeinline extends Component
{
    public $msg = 'Apenas um teste';
    public $btn = "salavar";

public function mount(){
    $this->msg = "montado";
}

    public function render()
    {
        return <<<'blade'
            <div>
            showwwwwwwwwwwwwwwwwwwwwwww
            <p>{{ $msg }}</p>

            <input type="text" id="msg" name="msg" wire:model="msg">
            <input type="button" value="{{ $btn }}">
            </div>
        blade;
    }
}
