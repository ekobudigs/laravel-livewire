<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    public PostForm $form;

    public function save()
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
