<div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1>User Documents</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-7 mb-2">
                    <label class="form-label">NBI clearance</label>
                    {{-- <img src="{{ isset($details['nbi']) }}"
                     class="img-fluid" style="width: 150px"> --}}
                    <x-input type="file" model="nbi"/>
                    @if ($nbi)
                        Photo Preview:
                        <img src="{{ $nbi->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['nbi'])
                        Photo Preview:

                        {{-- <img src="{{ isset($details['nbi']) ? Storage::url($details['nbi']) : '' }}"
                     class="img-fluid" style="width: 150px"> --}}

                        <img src="{{ Storage::url($details['nbi']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">Police clearance</label>
                    <x-input type="file" model="police"/>
                    @if ($police)
                        Photo Preview:
                        <img src="{{ $police->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['police'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['police']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">Birth certificate</label>
                    <x-input type="file" model="birth_cert"/>
                    @if ($birth_cert)
                        Photo Preview:
                        <img src="{{ $birth_cert->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['birth_cert'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['birth_cert']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">Transcript of records</label>
                    <x-input type="file" model="tor"/>
                    @if ($tor)
                        Photo Preview:
                        <img src="{{ $tor->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['tor'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['tor']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">SSS id</label>
                    <x-input type="file" model="sss"/>
                    @if ($sss)
                        Photo Preview:
                        <img src="{{ $sss->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['sss'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['sss']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">TIN id</label>
                    <x-input type="file" model="tin"/>
                    @if ($tin)
                        Photo Preview:
                        <img src="{{ $tin->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['tin'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['tin']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">Philhealth</label>
                    <x-input type="file" model="philhealth"/>
                    @if ($philhealth)
                        Photo Preview:
                        <img src="{{ $philhealth->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['philhealth'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['philhealth']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-7 mb-2">
                    <label class="form-label">Resume</label>
                    <x-input type="file" model="resume"/>
                    @if ($resume)
                        Photo Preview:
                        <img src="{{ $resume->temporaryUrl() }}" class="img-fluid">
                    @endif
                    @isset($details['resume'])
                        Photo Preview:
                        <img src="{{ Storage::url($details['resume']) }}" class="img-fluid">
                    @endisset
                </div>
                <div class="col-md-12 mb-2">
                    <button id="sendBtn" type="button" class="btn btn-primary btn-block" wire:click="store">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
