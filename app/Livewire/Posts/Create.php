<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function save()
    {
        $user = User::find(1);
        $validated = $this->validate();

        $user->posts()->create($validated);

        $this->reset();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
