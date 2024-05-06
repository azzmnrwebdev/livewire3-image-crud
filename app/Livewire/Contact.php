<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

// #[Title('Contact')]

class Contact extends Component
{
    public string $appName;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function render()
    {
        return view('livewire.contact')->title('Contact - '.$this->appName);
    }
}
