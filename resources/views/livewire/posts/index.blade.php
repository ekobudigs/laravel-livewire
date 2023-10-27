<div>
    <div class="row">
        <div class="col-md-6">
            {{-- <livewire:posts.create /> --}}
            <livewire:posts.post-new />
        </div>

        <div class="col-md-6">
            @foreach ($posts as $post)
                <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" />
            @endforeach
        </div>
    </div>
</div>
