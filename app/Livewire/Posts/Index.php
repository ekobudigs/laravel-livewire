<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Posts')]


class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
