  @if (flash()->message)
      <div class="alert alert-{{ flash()->class }}" role="alert">
          @if (flash()->class == 'success')
              <i class="bi bi-arrow-down-right-circle"></i>
          @endif
          @if (flash()->class == 'info')
              <i class="bi bi-journal-bookmark"></i>
          @endif

          @if (flash()->class == 'danger' || flash()->class == 'warning')
              <i class="bi bi-bell"></i>
          @endif
          {{ flash()->message }}
      </div>
  @endif
