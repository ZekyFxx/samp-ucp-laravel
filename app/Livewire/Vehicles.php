<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Vehicles extends Component
{
    public function render()
    {
        $user = User::all();
        return view('livewire.vehicles',['user'=>$user]);
    }
}
