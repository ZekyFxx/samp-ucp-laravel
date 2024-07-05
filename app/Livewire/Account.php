<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;

class Account extends Component
{
    #[Title('Stars Roleplay - Perfil')] 
    public function render()
    {
        $datos = User::all();
        return view('livewire.account',['data' => $datos]);
    }
}
