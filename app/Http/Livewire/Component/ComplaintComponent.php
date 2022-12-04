<?php

namespace App\Http\Livewire\Component;

use App\Models\Agency;
use App\Models\Applicant;
use App\Models\Complaint;
use Livewire\Component;

class ComplaintComponent extends Component
{
    public array $details = [];

    public function render()
    {
        return view('livewire.component.complaint-component');
    }

    public function store()
    {
        $this->validate([
            'details.fullname' => 'required',
            'details.birthdate' => 'required',
            'details.gender' => 'required',
            'details.passport_no' => 'required',
            'details.occupation' => 'required',
            'details.email' => 'required',
            'details.contact_person' => 'required',
            'details.contact_1' => 'required',
            'details.contact_2' => 'required',
            'details.complaint' => 'required',
        ]);

        $agency = Applicant::query()->select('agency_id')->where('user_id', auth()->id())->first();

        Complaint::query()->create([
            'agency_id' => $agency->agency_id,
            'user_id' => auth()->id(),
            'full_name' => $this->details['full_name'] ?? null,
            'birthdate' => $this->details['birthdate'] ?? null,
            'gender' => $this->details['gender'] ?? null,
            'passport_no' => $this->details['passport_no'] ?? null,
            'occupation' => $this->details['occupation'] ?? null,
            'email' => $this->details['email'] ?? null,
            'contact_person' => $this->details['contact_person'] ?? null,
            'contact_1' => $this->details['contact_1'] ?? null,
            'contact_2' => $this->details['contact_2'] ?? null,
            'complaint' => $this->details['complaint'] ?? null,
        ]);

        $this->emit('toast', 'Complaint has been sent!');
        $this->details = [];
    }
}
