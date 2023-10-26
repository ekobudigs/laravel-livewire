<div>

    <x-flash-message />

    <div class="card">

        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">
                    New Post New
                </h5>

                <form wire:submit="save">



                    <div class="mb-4">
                        <label for="body" class="form-label">body</label>
                        <textarea type="text" wire:model="form.body" class="form-control" id="body"> </textarea>
                        @error('form.body')
                            <small class="text-danger d-block mt-1"> {{ $message }} </small>
                        @enderror
                    </div>

                    <button class="btn-primary">
                        Save
                    </button>
                </form>
            </div>
        </div>


    </div>

</div>
