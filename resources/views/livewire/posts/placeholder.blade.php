<div class="col-md-6 d-flex flex-column @if (count($placeholders) > 0) mt-4 @endif">
    @foreach ($placeholders as $placeholder)
        <div class="card card-list border-0 mb-3">
            <div class="card-body p-0">
                <h5 class="card-title placeholder-glow"><span class="placeholder col-12"></span></h5>
                <p class="card-text placeholder-glow"><span class="placeholder col-12"></span></p>

                <a class="btn btn-sm btn-info disabled placeholder col-2" aria-disabled="true"></a>
                <a class="btn btn-sm btn-warning disabled placeholder col-2" aria-disabled="true"></a>
                <a class="btn btn-sm btn-danger disabled placeholder col-2" aria-disabled="true"></a>
            </div>
        </div>
    @endforeach
</div>
