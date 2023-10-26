<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class PostFormNew extends Form
{

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {



        $post =  Auth::user()->posts()->create($this->validate());
        flash('Post Created', 'warning');
        $this->reset();

        return $post;
    }
}
