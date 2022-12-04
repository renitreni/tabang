<div>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">My OFW</h1>

    <div class="card">
        <div class="card-body">
            <ul class="list-group">
                @foreach($applicants as $applicant)
                    <li class="list-group-item list-group-item-action d-flex">
                        <div class="my-auto mr-3">
                            @if($applicant['status'] == '0')
                                <button type="button" class="btn btn-sm btn-warning"
                                        wire:click="approve({{ $applicant['id'] }})">
                                    Pending
                                </button>
                            @else
                                <button type="button" class="btn btn-sm btn-primary"
                                        wire:click="pending({{ $applicant['id'] }})">
                                    Approved
                                </button>
                            @endif
                        </div>
                        <div class="my-auto">
                            {{$applicant['user']['last_name']}}, {{$applicant['user']['first_name']}}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
