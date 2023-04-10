<div>
    {{-- Be like water. --}}
    <div class="card shadow">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1>Requirement Checklist</h1>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['nbi'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="NBI clearance" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['police'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="Police clearance" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['birth_cert'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="Birth certificate" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['tor'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white font-bold" aria-label="Text input with checkbox" placeholder="Transcript of records" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['sss'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="SSS id" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['tin'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="TIN id" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['philhealth'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="Philhealth id" disabled>
                </div>
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            @if($details['resume'])
                                <i class="fas fa-fw fa-solid fa-check w-25"></i>
                            @else
                                <span class="xmark_icon">X</span>
                            @endif
                        </div>
                    </div>
                    <input type="text" class="form-control bg-white" aria-label="Text input with checkbox" placeholder="Resume" disabled>
                </div>


            </div>
        </div>
    </div>
    
</div>
