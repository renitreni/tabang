<div>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-2">
            <div class="card mt-5">
                <div class="card-header">
                    New Account Registration
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <form>
                                <div class="d-flex flex-column justify-content-center">
                                    @if($photo && $errors->isEmpty())
                                        <label>Photo Preview</label>
                                        <img class="preview-profile shadow-sm" src="{{ $photo->temporaryUrl() }}">
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
                                <div class="col-md-12 mb-2">
                                    <input type="password" class="form-control" placeholder="Password"
                                           wire:model="password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <input type="password" class="form-control" placeholder="Password Confirmation"
                                           wire:model="passwordConfirmation">
                                    @error('passwordConfirmation')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn btn-primary btn-block" wire:click="save">Create Account
                        </button>
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-2"></div>
        <div class="col-md-4">
            <img src="{{ asset('images/sponsors.png') }}" class="img-fluid">
        </div>
    </div>
</div>
