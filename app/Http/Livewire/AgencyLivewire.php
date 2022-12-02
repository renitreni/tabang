<?php

namespace App\Http\Livewire;

use App\Models\Agency;
use Livewire\Component;

class AgencyLivewire extends Component
{
    public ?array $detail = null;

    public function render()
    {
        return view('livewire.agency-livewire', [
            'agencies' => Agency::query()->orderBy('name')->paginate(10),
        ]);
    }

    public function store()
    {
        $this->validate([
            'detail.agency_code' => 'required|unique:agencies,agency_code',
        ]);

        Agency::query()->create($this->detail);

        $this->emit('toast', 'Success!');
    }

    public function getDetails($id)
    {
        $this->detail = Agency::query()->find($id)->toArray();
    }

    public function update()
    {
        $this->validate([
            'detail.agency_code' => 'required|unique:agencies,agency_code,'.$this->detail['id'],
        ]);

        $this->emit('toast', 'Success!');
    }

    public function resetVars()
    {
        $this->detail = [];
    }

    public function delete()
    {
        Agency::destroy($this->detail['id']);
    }
}
