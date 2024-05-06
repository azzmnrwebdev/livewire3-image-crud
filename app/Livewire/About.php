<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

// #[Title('About')]

class About extends Component
{
    public string $appName;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function render()
    {
        return view('livewire.about')->title('About - '.$this->appName);
    }
}
