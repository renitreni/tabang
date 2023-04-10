<?php

namespace App\Http\Livewire;
use App\Models\UserDocs;

use Livewire\Component;

class RequirementChecklist extends Component
{
    public array $details = [];

    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $docs = UserDocs::query()->where('user_id', $this->user_id)->get()->toArray();
        $this->details = count($docs) ? $docs[0] : $docs;
    }

    public function render()
    {
        return view('livewire.requirement-checklist');
    }
}
