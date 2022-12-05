<?php

namespace App\Http\Livewire;

use App\Models\Agency;
use App\Models\AgencyUser;
use App\Models\User;
use Livewire\Component;

class AgencyLivewire extends Component
{
    public ?array $detail = null;

    public ?string $userEmail = null;

    public mixed $user = [];

    public ?array $members = [];

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
        $this->detail  = Agency::query()->find($id)->toArray();
        $this->members = collect(
            AgencyUser::query()->with('user')->where('agency_id', $id)->get() ?? []
        )->toArray();
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

    public function showUser()
    {
        if ($this->userEmail && $this->userEmail != '') {
            $this->user = User::withCount(['agency'])
                              ->select('id', 'email')
                              ->where('email', 'like', "%$this->userEmail%")
                              ->get();
        } else {
            $this->user = [];
        }
    }

    public function addAsMember($id)
    {
        $this->userEmail = null;
        $this->user = [];
        AgencyUser::query()->updateOrCreate(['user_id' => $id], [
            'user_id' => $id,
            'agency_id' => $this->detail['id'],
        ]);
    }
}
