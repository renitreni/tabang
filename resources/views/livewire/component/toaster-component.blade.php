<div>
    <div class="position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast hide fade" role="alert" aria-live="assertive" aria-atomic="true" wire:ignore.self>
            <div class="toast-header">
                <i class="fas fa-bell me-2"></i>
                <strong class="me-auto">Notification</strong>
                <small>{{ now()->diffForHumans() }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $toastMessage }}
            </div>
        </div>
    </div>
    <script>
        let toaster = new bootstrap.Toast(document.getElementById('liveToast'))
        Livewire.on('toast', message => {
            toaster.show()
        })
    </script>
</div>
