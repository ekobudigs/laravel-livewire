<div>
    <div class="card-body">
        <h5 class="cart-title">
            Login
        </h5>
        <form wire:submit="login">
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input wire:model="form.email" class="form-control" type="email" name="email" id="email">
                @error('form.email')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">password</label>
                <input wire:model="form.password" class="form-control" type="password" name="password" id="password">
                @error('form.password')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </form>
    </div>
</div>
