<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Login extends Component
{
    #[Layout('layouts.guest')]

    public LoginForm $form;

    public function login()
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.login');
    }
}
