<?php

namespace App\Http\Livewire;

use App\Models\AgencyUser;
use App\Models\Applicant;
use Livewire\Component;

class MyOFWLivewire extends Component
{
    public ?array $applicants = [];

    public function render()
    {
        $agencyUser       = AgencyUser::query()->where('user_id', auth()->id())->first();
        $this->applicants = Applicant::query()->with(['user'])->where('agency_id',
            $agencyUser->agency_id)->get()->toArray();

        return view('livewire.my-o-f-w-livewire');
    }

    public function approve($id)
    {
        $applicant = Applicant::query()->find($id);

        $applicant->status = 1;
        $applicant->save();
    }

    public function pending($id)
    {
        $applicant = Applicant::query()->find($id);

        $applicant->status = 0;
        $applicant->save();
    }
}
