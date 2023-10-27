<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;


#[Title('Posts')]



class Index extends Component
{
    #[On('postCreated')]

    public function update($post)
    {
    }
    public function render()
    {
        return view(
            'livewire.posts.index',
            [
                'posts' => Post::query()->with('user')->latest()->get()
            ]
        );
    }
}
