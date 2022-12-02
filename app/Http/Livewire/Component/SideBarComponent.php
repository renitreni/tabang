<?php

namespace App\Http\Livewire\Component;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SideBarComponent extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.component.side-bar-component', ['uri' => request()->route()->uri]);
    }
}
