<div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1>User Documents</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 mb-2">
                    <label class="form-label">NBI clearance</label>
                    <div class="d-flex">
                        @if ($nbi || $details['nbi'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('nbi')">Delete</button>
                        @endif
                        <x-input type="file" model="nbi" />
                    </div>
                    <div class="mb-4"></div>
                    @if ($nbi)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $nbi->temporaryUrl() }}" target="_blank">
                            <img src="{{ $nbi->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else 
                    @isset($details['nbi'])
                        <a href="/storage/{{ $details['nbi'] }}" target="_blank">
                            <img src="{{ Storage::url($details['nbi']) }}" class="user_docs_img">
                            <a href="/storage/{{ $details['nbi'] }}" target="_blank">
                             </a>
                        </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Police clearance</label>
                    <div class="d-flex">
                        @if ($police || $details['police'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('police')">Delete</button>
                        @endif
                        <x-input type="file" model="police" />
                    </div>
                    <div class="mb-4"></div>
                    @if ($police)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $police->temporaryUrl() }}" target="_blank">
                            <img src="{{ $police->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['police'])
                            <a href="/storage/{{ $details['police'] }}" target="_blank">
                                <img src="{{ Storage::url($details['police']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                    
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Birth certificate</label>
                    <div class="d-flex">
                        @if ($birth_cert || $details['birth_cert'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('birth_cert')">Delete</button>
                        @endif
                        <x-input type="file" model="birth_cert" />
                    </div>
                    <div class="mb-4"></div>

                    @if ($birth_cert)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $birth_cert->temporaryUrl() }}" target="_blank">
                            <img src="{{ $birth_cert->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['birth_cert'])
                            <a href="/storage/{{ $details['birth_cert'] }}" target="_blank">
                                <img src="{{ Storage::url($details['birth_cert']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Transcript of records</label>
                    <div class="d-flex">
                        @if ($tor || $details['tor'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('tor')">Delete</button>
                        @endif
                        <x-input type="file" model="tor"/>
                    </div>
                    <div class="mb-4"></div>
                    @if ($tor)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $tor->temporaryUrl() }}" target="_blank">
                            <img src="{{ $tor->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['tor'])
                            <a href="/storage/{{ $details['tor'] }}" target="_blank">
                                <img src="{{ Storage::url($details['tor']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">SSS id</label>
                    <div class="d-flex">
                        @if ($sss || $details['sss'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('sss')">Delete</button>
                        @endif
                        <x-input type="file" model="sss"/>

                    </div>
                    <div class="mb-4"></div>

                    @if ($sss)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $sss->temporaryUrl() }}" target="_blank">
                            <img src="{{ $sss->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['sss'])
                            <a href="/storage/{{ $details['sss'] }}" target="_blank">
                                <img src="{{ Storage::url($details['sss']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">TIN id</label>
                    <div class="d-flex">
                        @if ($tin || $details['tin'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('tin')">Delete</button>
                        @endif
                        <x-input type="file" model="tin"/>

                    </div>
                    <div class="mb-4"></div>

                    @if ($tin)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $tin->temporaryUrl() }}" target="_blank">
                            <img src="{{ $tin->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['tin'])
                            <a href="/storage/{{ $details['tin'] }}" target="_blank">
                                <img src="{{ Storage::url($details['tin']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Philhealth</label>
                    <div class="d-flex">
                        @if ($philhealth || $details['philhealth'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('philhealth')">Delete</button>
                        @endif
                        <x-input type="file" model="philhealth"/>

                    </div>
                    <div class="mb-4"></div>

                    @if ($philhealth)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $philhealth->temporaryUrl() }}" target="_blank">
                            <img src="{{ $philhealth->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['philhealth'])
                            <a href="/storage/{{ $details['philhealth'] }}" target="_blank">
                                <img src="{{ Storage::url($details['philhealth']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-6 mb-2">
                    <label class="form-label">Resume</label>
                    <div class="d-flex">
                        @if ($resume || $details['resume'])
                            <button class="btn btn-sm btn-danger mr-2" wire:click="remove('resume')">Delete</button>
                        @endif
                        <x-input type="file" model="resume"/>

                    </div>
                    <div class="mb-4"></div>

                    @if ($resume)
                        <span class="d-block col-md-6">
                            Photo Preview:
                        </span>
                        <a href="{{ $resume->temporaryUrl() }}" target="_blank">
                            <img src="{{ $resume->temporaryUrl() }}" class="user_docs_img">
                        </a>
                    @else
                        @isset($details['resume'])
                            <a href="/storage/{{ $details['resume'] }}" target="_blank">
                                <img src="{{ Storage::url($details['resume']) }}" class="user_docs_img">
                            </a>
                        @endisset
                    @endif
                </div>
                <div class="col-md-12 mb-2">
                    <button id="sendBtn" type="button" class="btn btn-primary btn-block" wire:click="store">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
