<div class="row">
    <div class="col-md-6">
        <form class="row g-3" wire:submit='update' enctype="multipart/form-data">
            <div class="col-12">
                <textarea wire:model='body' class="form-control" rows="5" aria-describedby="validationBodyFeedback"
                    placeholder="What's on your mind ?">{{ $body }}</textarea>

                @error('body')
                    <small id="validationBodyFeedback" class="text-danger d-block mt-1">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="col-12">
                <input wire:model='newImage' accept="image/png, image/jpg, image/jpeg" type="file"
                    class="form-control" aria-describedby="validationImageFeedback" />

                @error('newImage')
                    <small id="validationImageFeedback" class="text-danger d-block mt-1">
                        {{ $message }}
                    </small>
                @enderror

                <div class="mt-3" wire:loading wire:target='newImage'>
                    <span class="text-success">Uploading ...</span>
                </div>

                @if ($newImage)
                    <img src="{{ $newImage->temporaryUrl() }}" alt="Image Preview" class="img-fluid rounded w-100 mt-3">
                @else
                    <img src="{{ asset('storage/images/' . $image) }}" alt="Image Preview"
                        class="img-fluid rounded w-100 mt-3">
                @endif
            </div>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
