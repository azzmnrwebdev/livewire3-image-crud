<div class="row">
    <div class="col-md-6">
        <a href="{{ route('posts.index') }}" wire:navigate class="text-decoration-none text-light"><i
                class="bi bi-arrow-left"></i>&nbsp;&nbsp;Back</a>

        <form class="row g-3 mt-2" wire:submit='store' enctype="multipart/form-data">
            <div class="col-12">
                <textarea wire:model='body' class="form-control" rows="5" aria-describedby="validationBodyFeedback"
                    placeholder="What's on your mind ?"></textarea>

                @error('body')
                    <small id="validationBodyFeedback" class="text-danger d-block mt-1">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="col-12">
                <input wire:model='image' accept="image/png, image/jpg, image/jpeg" type="file" class="form-control"
                    aria-describedby="validationImageFeedback" />

                @error('image')
                    <small id="validationImageFeedback" class="text-danger d-block mt-1">
                        {{ $message }}
                    </small>
                @enderror

                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="img-fluid rounded w-100 mt-3">
                @endif

                <div class="mt-3" wire:loading wire:target='image'>
                    <span class="text-success">Uploading ...</span>
                </div>
            </div>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
