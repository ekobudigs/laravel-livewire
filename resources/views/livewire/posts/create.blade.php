<div class="card">

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">
                New Post
            </h5>

            <form wire:submit="save">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title" />

                    @error('title')
                        <small class="text-danger d-block mt-1"> {{ $message }} </small>
                    @enderror
                </div>


                <div class="mb-4">
                    <label for="body" class="form-label">body</label>
                    <textarea type="text" wire:model="body" class="form-control" id="body"> </textarea>
                    @error('body')
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
