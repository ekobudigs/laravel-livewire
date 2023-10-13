<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('contact')]

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
