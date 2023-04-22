<?php

namespace App\Http\Livewire\Component;

use App\Models\ForeignAgency;
use App\Models\AgencyUser;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FRAComponent extends Component
{
    public string $fraKey = '';

    public array $fra = [];
    public ?int $agency_id;

    public function mount()
    {
        $user_id = auth()->user()->id;
        $this->agency_id = AgencyUser::query()->where('user_id', $user_id)->get()[0]->agency_id;
    }

    

    public function render(): Factory|View|Application
    {
        $this->fra = ForeignAgency::query()
                                  ->select(['id', 'agency_name'])
                                  ->where('agency_id', $this->agency_id)
                                  ->get()
                                  ->toArray();

        return view('livewire.component.f-r-a-component');
    }

    public function addFRA()
    {
        ForeignAgency::create([
            'agency_id' => $this->agency_id,
            'agency_name' => $this->fraKey,
        ]);

        $this->fraKey = '';
        $this->fra    = ForeignAgency::query()
                                     ->select(['id', 'agency_name'])
                                     ->where('agency_id', $this->agency_id)
                                     ->get()
                                     ->toArray();
        $model_data = ForeignAgency::all();

        $model_data->fresh();
    }

    public function deleteFRA($id)
    {
        ForeignAgency::destroy($id);
        $this->fra = ForeignAgency::query()
                                  ->select(['id', 'agency_name'])
                                  ->where('agency_id', $this->agency_id)
                                  ->get()
                                  ->toArray();
    }
}
