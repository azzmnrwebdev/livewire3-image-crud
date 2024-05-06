<div>
    <div class="col-md-6 d-flex flex-column @if (count($posts) > 0) mt-4 @endif">
        @foreach ($posts as $post)
            <div class="card card-list border-0 mb-3">
                <div class="card-body p-0">
                    <h5 class="card-title">{{ $post->user->name }}</h5>
                    <p class="card-text">{{ $post->body }}</p>

                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" wire:navigate
                        class="btn btn-sm btn-info">View</a>

                    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" wire:navigate
                        class="btn btn-sm btn-warning">Edit</a>

                    <button class="btn btn-sm btn-danger" wire:click='destroy({{ $post->id }})'
                        wire:confirm='Are you sure you want to delete this?'>Delete</button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-0 @if ($total > 3) mt-4 @endif">
        <x-pagination :items="$posts" />
    </div>
</div>
