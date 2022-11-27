<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use Livewire\Component;

class ComplaintFormLivewire extends Component
{
    public array $details = [];

    public function render()
    {
        return view('livewire.complaint-form-livewire')
                ->layout('layouts.guest');
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

        Complaint::query()->create([
            'fullname' => $this->details['fullname'],
            'birthdate' => $this->details['birthdate'],
            'gender' => $this->details['gender'],
            'passport_no' => $this->details['passport_no'],
            'occupation' => $this->details['occupation'],
            'email' => $this->details['email'],
            'contact_person' => $this->details['contact_person'],
            'contact_1' => $this->details['contact_1'],
            'contact_2' => $this->details['contact_2'],
            'complaint' => $this->details['complaint'],
        ]);

        $this->emit('toast', 'Complaint has been sent!');
        $this->details = [];
    }
}
