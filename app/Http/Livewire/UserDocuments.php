<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\UserDocs;

class UserDocuments extends Component
{
    use WithFileUploads;

    public $nbi;
    public $police;
    public $birth_cert;
    public $tor;
    public $sss;
    public $tin;
    public $philhealth;
    public $resume;

    public array $details = [];


    public function render()
    {
        return view('livewire.user-documents');
    }

    public function store()
    {
        if ($this->nbi) {
            $this->details['nbi'] = $this->nbi->store('user_documents', 'public');
        }
        if ($this->police) {
            $this->details['police'] = $this->police->store('user_documents', 'public');
        }
        if ($this->birth_cert) {
            $this->details['birth_cert'] = $this->birth_cert->store('user_documents', 'public');
        }
        if ($this->tor) {
            $this->details['tor'] = $this->tor->store('user_documents', 'public');
        }
        if ($this->sss) {
            $this->details['sss'] = $this->sss->store('user_documents', 'public');
        }
        if ($this->tin) {
            $this->details['tin'] = $this->tin->store('user_documents', 'public');
        }
        if ($this->philhealth) {
            $this->details['philhealth'] = $this->philhealth->store('user_documents', 'public');
        }
        if ($this->resume) {
            $this->details['resume'] = $this->resume->store('user_documents', 'public');
        }

        $this->details['user_id'] = auth()->user()->id;

        $user_docs = UserDocs::query()->where('user_id', $this->user_id)->first();
        if($user_docs) {
            UserDocs::where('user_id', $this->user_id)->update([
                'nbi' => $this->details['nbi'],
                'police' => $this->details['police'],
                'birth_cert' => $this->details['birth_cert'],
                'tor' => $this->details['tor'],
                'sss' => $this->details['sss'],
                'tin' => $this->details['tin'],
                'philhealth' => $this->details['philhealth'],
                'resume' => $this->details['resume'],
            ]);
            
        } else {
            UserDocs::query()->create([
                'user_id' => $this->user_id,
                'nbi' => $this->details['nbi'],
                'police' => $this->details['police'],
                'birth_cert' => $this->details['birth_cert'],
                'tor' => $this->details['tor'],
                'sss' => $this->details['sss'],
                'tin' => $this->details['tin'],
                'philhealth' => $this->details['philhealth'],
                'resume' => $this->details['resume'],
            ]);
        }
        $this->emit('toast', 'User documents has been saved!');
        $this->clearDatas();
    }

    public function remove($value)
    {
        $this->details[$value] = null;
        $this->value = null;
    }

    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $docs = UserDocs::query()->where('user_id', $this->user_id)->get()->toArray();
        $this->details = count($docs) ? $docs[0] : $docs;
    }

    public function clearDatas()
    {
        $this->nbi = '';
        $this->police = '';
        $this->birth_cert = '';
        $this->tor = '';
        $this->sss = '';
        $this->tin = '';
        $this->philhealth = '';
        $this->resume = '';
    }
}
