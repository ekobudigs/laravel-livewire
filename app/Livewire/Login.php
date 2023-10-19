<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    #[Layout('layouts.guest')]

    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';
    public function login()
    {

        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'Ine ne provided credentials do not match our records.',
        ]);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
