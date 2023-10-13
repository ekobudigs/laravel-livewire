<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('About')]
class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
