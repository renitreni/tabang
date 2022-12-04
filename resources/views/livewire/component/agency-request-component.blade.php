<div>

    @if(!isset($application['status']) || $application['status'] == '0')
        <div class="d-flex mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label>Agency Code (Request to join and Agency)</label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-auto">
                                    <input type="text" class="form-control" wire:model="code">
                                    @error('code') {{ $message }}  @enderror
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-primary my-auto" wire:click="send">
                                        JOIN NOW
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @isset($application['status'])
        @if($application['status'] == '0')
            <h2>Wait for the Agency's Approval</h2>
        @else
            <livewire:component.complaint-component/>
        @endif
    @else
        <h2>You have no agency yet.</h2>
    @endif
</div>
