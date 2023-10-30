<div>
    <div class="row">
        <div class="col-md-6">
            {{--
            <livewire:posts.create /> --}}
            <livewire:posts.post-new />
        </div>

        <div class="col-md-6">
         
          <livewire:posts.index :lazy="false" />
        </div>
    </div>
</div>