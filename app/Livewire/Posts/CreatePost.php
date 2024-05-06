<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreatePost extends Component
{
    use WithFileUploads;
    public $body, $image, $appName;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function store()
    {
        $this->validate([
            'body' => ['required'],
            'image' => ['required', 'image', 'max:1024']
        ]);

        $name = md5($this->image . microtime()) . '.' . $this->image->extension();
        $this->image->storeAs('images', $name, 'public');

        Auth::user()->posts()->create([
            'body' => $this->body,
            'image' => $name
        ]);

        flash('Post created successfully.', 'success');
        return $this->redirect(route('posts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.create-post')->title('Posts Create - ' . $this->appName);
    }
}
