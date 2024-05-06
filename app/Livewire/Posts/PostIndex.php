<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostIndex extends Component
{
    public $appName, $posts;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function render()
    {
        return view('livewire.posts.post-index')->title('Posts - ' . $this->appName);
    }
}
