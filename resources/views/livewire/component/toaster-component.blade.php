<div>
    <div style="position: absolute; top: 0; right: 0; z-index: 999;">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" wire:ignore.self>
            <div class="toast-header">
                <strong class="mr-2">Notification</strong>
                <small>{{ now()->diffForHumans() }}</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ $toastMessage }}
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            Livewire.on('toast', message => {
                $('.toast').toast('show')
            })
        </script>
    @endpush
</div>
