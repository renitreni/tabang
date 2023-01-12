<div>
    <div class="d-flex justify-content-between w-100">
        <h1>My Profile</h1>
    </div>
    <div class="card-body">
        <div class="d-flex">
            <div class="d-flex flex-column justify-content-center profile_image">
                @if ($tempo_photo && $errors->isEmpty())
                    <img class="preview-profile shadow-sm w-100 h-100" src="{{ $tempo_photo->temporaryUrl() }}">
                @elseif($photo && $errors->isEmpty())
                    <img class="preview-profile shadow-sm w-100 h-100"
                        src="{{ route('storage', ['path' => $photo]) }}">
                @else
                    <img class="preview-profile shadow-sm"
                         src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y">
                @endif
            </div>
            <div class="d-flex flex-column align-self-center ml-2">
                <div class="btn btn-primary h-fit mb-2">
                    <input type="file" id="upload" hidden wire:model="tempo_photo"/>
                    <label for="upload" class="label-file align-items-center m-0">Upload My
                        Photo</label>
                </div>
                <button class="btn btn-danger w-fit" wire:click="deletePhoto">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
            

        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="form-label">First name</label>
                <input type="text" name="firstName"
                    class="form-control @error('firstName') is-invalid @enderror"
                    wire:model="firstName"
                    />
                @error('firstName')
                <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="form-label">Last name</label>
                <input type="text" name="lastName"
                    class="form-control @error('lastName') is-invalid @enderror"
                    wire:model="lastName"
                    />
                @error('lastName')
                <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="form-label">Email</label>
                <input type="text" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    wire:model="email"
                    />
                @error('email')
                <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="form-label">Phone</label>
                <input type="text" name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    wire:model="phone"
                    />
                @error('phone')
                <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="form-label">Address</label>
                <input type="text" name="address"
                    class="form-control @error('address') is-invalid @enderror"
                    wire:model="address"
                    />
                @error('address')
                <div class="text-danger small">{{ $message }}</div> @enderror
            </div>
        </div>
        {{-- <div class="card-footer">
            <button type="button" class="btn btn-primary h-100" wire:click="updateProfile">Save</button>
            <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
        </div> --}}
        <div>
            <button type="button" class="btn btn-secondary h-100">Cancel</button>
            <button type="button" class="btn btn-primary h-100" wire:click="updateProfile">Save</button>
        </div>
    </div>
</div>
