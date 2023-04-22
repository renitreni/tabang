<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Flights</h1>
    <!-- DataTales Example -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 d-flex justify-content-end mb-2">
                    <div>
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#flightAdd"
                           wire:click="">Add Flight</a>
                    </div>
                </div>
                <div class="col-12">
                    <livewire:flight-table/>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Create Modal -->
    <div wire:ignore.self class="modal fade" id="flightAdd" tabindex="-1" role="dialog" aria-labelledby="flightAddLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightAddLabel">Add Flight</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Fullname</label>
                                            <input type="text" name="fullname"
                                                class="form-control @error('details.fullname') is-invalid @enderror"
                                                wire:model.debounce="details.fullname"/>
                                            @error('details.fullname')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Departure</label>
                                            <input type="date" name="departure"
                                                class="form-control @error('details.departure') is-invalid @enderror"
                                                wire:model.debounce="details.departure"/>
                                            @error('details.departure')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Arrival</label>
                                            <input type="date" name="arrival"
                                                class="form-control @error('details.arrival') is-invalid @enderror"
                                                wire:model.debounce="details.arrival"/>
                                            @error('details.arrival')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">FRA</label>
                                            <input type="text" name="FRA_id"
                                                class="form-control @error('details.FRA_id') is-invalid @enderror"
                                                wire:model.debounce="details.FRA_id"/>
                                            @error('details.FRA_id')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Employer</label>
                                            <input type="text" name="employer"
                                                class="form-control @error('details.employer') is-invalid @enderror"
                                                wire:model.debounce="details.employer"/>
                                            @error('details.employer')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div wire:ignore.self class="modal fade" id="flightEdit" tabindex="-1" role="dialog" aria-labelledby="flightEditLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flightEditLabel">Edit Flight</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Fullname</label>
                                            <input type="text" name="fullname"
                                                class="form-control @error('details.fullname') is-invalid @enderror"
                                                wire:model.debounce="details.fullname"/>
                                            @error('details.fullname')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Status</label>
                                            <select class="form-control @error('details.status') is-invalid @enderror" wire:model.debounce="details.status">
                                                @foreach($statusArr as $status)
                                                    <option value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                            @error('details.status')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Departure</label>
                                            <input type="date" name="departure"
                                                class="form-control @error('details.departure') is-invalid @enderror"
                                                wire:model.debounce="details.departure"/>
                                            @error('details.departure')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Arrival</label>
                                            <input type="date" name="arrival"
                                                class="form-control @error('details.arrival') is-invalid @enderror"
                                                wire:model.debounce="details.arrival"/>
                                            @error('details.arrival')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">FRA</label>
                                            <input type="text" name="FRA_id"
                                                class="form-control @error('details.FRA_id') is-invalid @enderror"
                                                wire:model.debounce="details.FRA_id"/>
                                            @error('details.FRA_id')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label class="form-label">Employer</label>
                                            <input type="text" name="employer"
                                                class="form-control @error('details.employer') is-invalid @enderror"
                                                wire:model.debounce="details.employer"/>
                                            @error('details.employer')
                                            <div class="text-danger small">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="update">Update</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    User will permanently deleted.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click="confirmDestroy">Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
