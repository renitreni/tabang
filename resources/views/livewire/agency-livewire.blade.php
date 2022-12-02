<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agencies</h1>
    <livewire:component.toaster-component/>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#agencyModal"
                        wire:click="resetVars">
                        Add Agency
                    </a>
                </div>
                <div class="col-md-12">
                    <ul class="list-group">
                        @foreach($agencies as $item)
                            <li class="list-group-item d-flex flex-row">
                                <div>
                                    <a href="#" class="btn btn-link m-0 p-0">Members</a>
                                    <a href="#" class="btn btn-link m-0 p-0" data-toggle="modal"
                                       data-target="#agencyEditModal" wire:click="getDetails({{ $item->id }})">Edit</a>
                                </div>
                                <div class="ml-2">
                                    {{ $item->name }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-12 mt-2">
                    {!! $agencies->links()  !!}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.partials.agenc-crud')

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

</div>
