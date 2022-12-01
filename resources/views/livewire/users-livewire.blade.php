<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <!-- DataTales Example -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 d-flex justify-content-end mb-2">
                    <div>
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#userAdd"
                           wire:click="showAddUserModal(3)">Add User</a>
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#userAdd"
                           wire:click="showAddUserModal(2)">Add Agency</a>
                        <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#userAdd"
                           wire:click="showAddUserModal(1)">Add Admin</a>
                    </div>
                </div>
                <div class="col-12">
                    <livewire:users-datatable/>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="userAdd" tabindex="-1" role="dialog" aria-labelledby="userAddLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userAddLabel">{{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <style>
                    .preview-profile {
                        width: 150px;
                        height: 150px;
                        align-self: center;
                    }
                </style>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <form>
                                        <div class="d-flex flex-column justify-content-center">
                                            @if($photo && $errors->isEmpty())
                                                <label>Photo Preview</label>
                                                    <img class="preview-profile shadow-sm"
                                                         src="{{ $photo->temporaryUrl() }}">
                                            @else
                                                <img class="preview-profile shadow-sm"
                                                     src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y">
                                            @endif
                                        </div>
                                        <div class="d-flex flex-row justify-content-center">
                                            <div>
                                                <input type="file" id="upload" hidden wire:model="photo"/>
                                                <label for="upload" class="label-file align-items-center">Upload My
                                                    Photo</label>
                                            </div>
                                        </div>
                                    </form>
                                    @error('photo')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" placeholder="First Name" wire:model="firstName">
                                            @error('firstName')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" placeholder="Last Name" wire:model="lastName">
                                            @error('lastName')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input class="form-control" placeholder="Contact"
                                                   wire:model="phone">
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input class="form-control" placeholder="E-mail" inputmode="email"
                                                   wire:model="email">
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        @if($password != 'samplepasspass')
                                            <div class="col-md-12 mb-2">
                                                <input type="password" class="form-control" placeholder="Password"
                                                       wire:model="password">
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <input type="password" class="form-control"
                                                       placeholder="Password Confirmation"
                                                       wire:model="passwordConfirmation">
                                                @error('passwordConfirmation')
                                                <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
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

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="userEdit" tabindex="-1" role="dialog" aria-labelledby="userEditLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userEditLabel">{{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <style>
                    .preview-profile {
                        width: 150px;
                        height: 150px;
                        align-self: center;
                    }
                </style>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <form>
                                        <div class="d-flex flex-column justify-content-center">
                                            @if($photo && $errors->isEmpty())
                                                <label>Photo Preview</label>
                                                    <img class="preview-profile shadow-sm"
                                                         src="{{ $photo->temporaryUrl() }}">
                                            @elseif($userID)
                                                <img class="preview-profile shadow-sm"
                                                     src="{{ route('storage', ['path' => $profile_photo]) }}">
                                            @else
                                                <img class="preview-profile shadow-sm"
                                                     src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y">
                                            @endif
                                        </div>
                                        <div class="d-flex flex-row justify-content-center">
                                            <div>
                                                <input type="file" id="upload" hidden wire:model="photo"/>
                                                <label for="upload" class="label-file align-items-center">Upload My
                                                    Photo</label>
                                            </div>
                                        </div>
                                    </form>
                                    @error('photo')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" placeholder="First Name" wire:model="firstName">
                                            @error('firstName')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" placeholder="Last Name" wire:model="lastName">
                                            @error('lastName')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input class="form-control" placeholder="Contact"
                                                   wire:model="phone">
                                            @error('phone')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <input class="form-control" placeholder="E-mail" inputmode="email"
                                                   wire:model="email">
                                            @error('email')
                                            <div class="text-danger">{{ $message }}</div> @enderror
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
</div>
