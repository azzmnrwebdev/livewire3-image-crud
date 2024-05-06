<div class="row">
    <div class="col-md-6">
        <a href="{{ route('posts.index') }}" wire:navigate class="text-decoration-none text-light"><i class="bi bi-arrow-left"></i>&nbsp;&nbsp;Back</a>

        <form class="row g-3 mt-2">
            <div class="col-12">
                <textarea class="form-control" rows="5" disabled>{{ $post->body }}</textarea>
            </div>

            <div class="col-12">
                <img src="{{ asset('storage/images/' . $post->image) }}" alt="Image Preview"
                    class="img-fluid rounded w-100 mt-2">
            </div>
        </form>
    </div>
</div>
