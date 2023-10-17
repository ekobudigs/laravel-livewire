<div>

    @if (flash()->message)
        <div class="alert alert-{{ flash()->class }}" role="alert">
            {{ flash()->message }}
        </div>
    @endif
    <div class="card">

        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">
                    New Post
                </h5>

                <form wire:submit="save">
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" wire:model="form.title" class="form-control" id="title" />

                        @error('form.title')
                            <small class="text-danger d-block mt-1"> {{ $message }} </small>
                        @enderror
                    </div>


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
