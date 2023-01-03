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
                                <div class="d-flex flex-row">
                                    <a href="#" class="btn btn-link m-0 p-0 mr-2" data-toggle="modal"
                                       data-target="#memberModal" wire:click="getDetails({{ $item->id }})">Members</a>
                                    <a href="#" class="btn btn-link m-0 p-0" data-toggle="modal"
                                       data-target="#agencyEditModal" wire:click="getDetails({{ $item->id }})">Edit</a>
                                </div>
                                <div class="w-100 ml-2 d-flex justify-content-between">
                                    <div>{{ $item->name }}</div>
                                    <div>{{ $item->agency_code }}</div>
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
    <div wire:ignore.self class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberModalLabel">Members</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>User ID</label>
                            <input class="form-control" wire:model="userEmail" wire:keyup="showUser">
                        </div>
                        <div class="col-md-12">
                            <dic class="list-group">
                                @foreach($user as $item)
                                    @if(!$item->agency)
                                        <button type="button" wire:click="addAsMember({{ $item->id }})"
                                                class="list-group-item list-group-item-action">
                                            {{ $item->email }}
                                        </button>
                                    @endif
                                @endforeach
                            </dic>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="d-flex flex-column">
                                @foreach($members as $member)
                                    @isset($member['user'])
                                        @foreach($member['user'] as $item)
                                            <div class="d-flex flex-row justify-content-between shadow-sm p-3 mb-2">
                                                <div>
                                                    {{ $item['last_name'] }}, {{ $item['first_name'] }}
                                                    ({{ $item['email'] }})
                                                </div>
                                                <div>
                                                    <button class="btn btn-sm btn-danger">Remove</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
