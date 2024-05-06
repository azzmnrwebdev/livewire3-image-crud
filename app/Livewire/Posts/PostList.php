<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class PostList extends Component
{
    use WithPagination;

    public function destroy(Post $post)
    {
        $pathFile = public_path('storage/images/' . $post->image);
        if (File::exists($pathFile)) File::delete($pathFile);

        $post->delete();
        flash('Post successfully deleted.', 'success');
        return $this->redirect(route('posts.index'), navigate: true);
    }

    public function placeholder(array $params = [])
    {
        $params['placeholders'] = Post::latest()->take(3)->get();
        return view('livewire.posts.placeholder', $params);
    }

    public function render()
    {
        $total = auth()->user()->posts()->count();
        $posts = auth()->user()->posts()->latest()->paginate(3);

        return view('livewire.posts.post-list', [
            'posts' => $posts,
            'total' => $total
        ]);
    }
}
