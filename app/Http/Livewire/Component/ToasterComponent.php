<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class ToasterComponent extends Component
{
    public string $toastMessage = '';

    protected $listeners = ['toast' => 'showToast'];

    public function render()
    {
        return view('livewire.component.toaster-component');
    }

    public function showToast($message)
    {
        $this->toastMessage = $message;
    }
}
