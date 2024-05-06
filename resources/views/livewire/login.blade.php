<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>

            <form class="row g-3" wire:submit='login'>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model='form.email' id="email" placeholder="example@gmail.com">

                    @error('form.email')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model='form.password' id="password" placeholder="password">

                    @error('form.password')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
