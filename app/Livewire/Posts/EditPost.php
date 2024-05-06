<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class EditPost extends Component
{
    use WithFileUploads;

    public Post $post;
    public $body, $image, $newImage, $appName;

    public function __construct()
    {
        $this->appName = env('APP_NAME');
    }

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->body = $post->body;
        $this->image = $post->image;
    }

    public function update()
    {
        $this->validate([
            'body' => ['required'],
            'newImage' => ['nullable', 'sometimes', 'image', 'max:1024']
        ]);

        if ($this->newImage) {
            $pathFile = public_path('storage/images/' . $this->post->image);
            if (File::exists($pathFile)) File::delete($pathFile);

            $name = md5($this->newImage . microtime()) . '.' . $this->newImage->extension();
            $this->newImage->storeAs('images', $name, 'public');

            $this->post->update([
                'body' => $this->body,
                'image' => $name
            ]);
        } else {
            $this->post->update([
                'body' => $this->body,
            ]);
        }

        flash('Post updated successfully.', 'success');
        return $this->redirect(route('posts.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.posts.edit-post')->title('Posts Edit - ' . $this->appName);
    }
}
