<div>
    <div class="card mt-5 rounded-5 shadow">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1>Emergency Complaint</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mb-2">
                    <label class="form-label">Fullname</label>
                    <input type="text" name="fullname"
                           class="form-control @error('details.fullname') is-invalid @enderror"
                           wire:model.debounce="details.fullname"/>
                    @error('details.fullname')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">Birthdate</label>
                    <input type="date" name="birthdate"
                           class="form-control @error('details.birthdate') is-invalid @enderror"
                           wire:model.debounce="details.birthdate"/>
                    @error('details.birthdate')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">Gender</label>
                    <select class="form-select @error('details.gender') is-invalid @enderror" name="gender"
                            wire:model.lazy="details.gender">
                        <option value="">-- Select Option --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @error('details.gender')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4 col-6 mb-2">
                    <label class="form-label">Passport No.</label>
                    <input type="text" name="passport_no @error('details.gender') is-invalid @enderror"
                           class="form-control"
                           wire:model.debounce="details.passport_no"/>
                    @error('details.passport_no')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4 col-6 mb-2">
                    <label class="form-label">Occupation</label>
                    <input type="text" name="occupation"
                           class="form-control @error('details.occupation') is-invalid @enderror"
                           wire:model.debounce="details.occupation"/>
                    @error('details.occupation')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control @error('details.email') is-invalid @enderror"
                           wire:model.debounce="details.email"/>
                    @error('details.email')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">Contact Person</label>
                    <input type="text" name="contact_person"
                           class="form-control @error('details.contact_person') is-invalid @enderror"
                           wire:model.debounce="details.contact_person"/>
                    @error('details.contact_person')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">Contact #1</label>
                    <input type="text" name="contact_1"
                           class="form-control @error('details.contact_1') is-invalid @enderror"
                           wire:model.debounce="details.contact_1"/>
                    @error('details.contact_1')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <label class="form-label">Contact #2</label>
                    <input type="text" name="contact_2"
                           class="form-control @error('details.contact_2') is-invalid @enderror"
                           wire:model.debounce="details.contact_2"/>
                    @error('details.contact_2')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label class="form-label">Complaint</label>
                    <textarea type="text" name="complaint"
                              class="form-control @error('details.complaint') is-invalid @enderror"
                              wire:model.debounce="details.complaint"></textarea>
                    @error('details.complaint')
                    <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-md-12 mb-2">
                <button type="button" class="btn btn-primary btn-block" wire:click="store">Submit</button>
                <a href="{{ route('login') }}" class="btn btn-secondary btn-block">Cancel</a>
            </div>
        </div>
    </div>
</div>
