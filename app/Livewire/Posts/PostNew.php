<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostFormNew;
use Livewire\Component;

class PostNew extends Component
{
    public PostFormNew $form;

    public function save()
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.posts.post-new');
    }
}
