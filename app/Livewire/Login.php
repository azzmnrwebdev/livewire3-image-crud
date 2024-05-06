<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\LoginForm;

#[Layout('layouts.guest')]

class Login extends Component
{
    public string $appName;
    public LoginForm $form;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function login()
    {
        $this->form->loginAct();
        return $this->redirect(route('home'), navigate: true);
    }

    public function render()
    {
        return view('livewire.login')->title('Login - ' . $this->appName);
    }
}
