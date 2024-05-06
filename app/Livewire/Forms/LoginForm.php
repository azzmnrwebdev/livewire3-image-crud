<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required'])]
    public string $password = '';

    public function loginAct()
    {
        if (Auth::attempt($this->validate())) {
            request()->session()->regenerate();
            return true;
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
