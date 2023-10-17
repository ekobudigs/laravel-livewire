<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {
        $user = User::find(1);


        $user->posts()->create($this->validate());

        $this->reset();
    }
}
