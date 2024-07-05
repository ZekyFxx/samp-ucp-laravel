<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Updates extends Component
{
    #[Title('S:RP - Updates')] 
    public function render()
    {
        return view('livewire.updates');
    }
}
