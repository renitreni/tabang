<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class SideBarComponent extends Component
{
    public function render()
    {
        return view('livewire.component.side-bar-component', ['uri' => request()->route()->uri]);
    }
}
