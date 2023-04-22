<div>
    <button class="btn btn-outline-secondary ms-3 position-relative" data-toggle="modal" data-target="#fraModal">
        <i class="fas fa-building-circle-arrow-right"></i> F.R.A.

        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
            {{ count($fra) }}
        </span>
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="fraModal" tabindex="-1" aria-labelledby="fraModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fraModalLabel">
                        Foreign Recruitment Agencies
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" style="border-radius: .35rem" placeholder="Agency Name"
                                        aria-label="Agency username" aria-describedby="button-addon2"
                                        wire:model="fraKey">
                                <button class="btn btn-outline-success ml-2" type="button" id="button-addon2"
                                        wire:click="addFRA">
                                    ADD
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="list-group">
                                @foreach($fra as $item)
                                    <li class="list-group-item d-flex flex-row justify-content-between align-items-center">
                                        <div>{{ $item['agency_name'] }}</div>
                                        <button class="btn btn-sm btn-danger m-0"
                                                wire:click="deleteFRA({{ $item['id'] }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
