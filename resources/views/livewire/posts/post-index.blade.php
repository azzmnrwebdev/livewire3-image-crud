<div>
    @if (flash()->message)
        <div class="alert alert-{{ flash()->class }}" role="alert">
            {{ flash()->message }}
        </div>
    @endif

    <div class="card">
        <div class="card-body p-4">
            <a wire:navigate href="{{ route('posts.create') }}" class="btn btn-primary">Create</a>

            <style>
                .card-list:last-child {
                    margin-bottom: 0 !important;
                }
            </style>

            <livewire:posts.post-list lazy="false" />
        </div>
    </div>
</div>
