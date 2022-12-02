<!-- Modal -->
<div wire:ignore.self class="modal fade" id="agencyModal" tabindex="-1" aria-labelledby="agencyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agencyModalLabel">Add Agency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label>Agency Code</label>
                        <input type="text" class="form-control" wire:model="detail.agency_code">
                        @error('detail.agency_code') {{ $message }} @enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Agency Name</label>
                        <input type="text" class="form-control" wire:model="detail.name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Description</label>
                        <textarea type="text" class="form-control" wire:model="detail.description"></textarea>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Address</label>
                        <textarea type="text" class="form-control" wire:model="detail.address"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="store">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="agencyEditModal" tabindex="-1" aria-labelledby="agencyEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agencyEditModalLabel">Add Agency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label>Agency Code</label>
                        <input type="text" class="form-control" wire:model="detail.agency_code">
                        @error('detail.agency_code') {{ $message }} @enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Agency Name</label>
                        <input type="text" class="form-control" wire:model="detail.name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Description</label>
                        <textarea type="text" class="form-control" wire:model="detail.description"></textarea>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label>Address</label>
                        <textarea type="text" class="form-control" wire:model="detail.address"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                <button type="button" class="btn btn-danger" wire:click="delete">Delete</button>
            </div>
        </div>
    </div>
</div>
