<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AgencyUser;
use App\Models\Flight;

class FlightLivewire extends Component
{
    public $name;
    public $status;
    public $arrival;
    public $departure;
    public $FRA_id;
    public $employer;
    public ?int $flight_id;

    public $statusArr = [
        "pending",
        "in-process",
        "deployed",
        "back-out",
    ];

    public $listeners = ['editFlight' => 'edit', 'destroyFlight' => 'destroy'];

    public array $details = [];
    public ?int $agency_id;

    public function render()
    {
        return view('livewire.flight-livewire');
    }

    public function mount()
    {
        $user_id = auth()->user()->id;
        $this->agency_id = AgencyUser::query()->where('user_id', $user_id)->get()[0]->agency_id;
    }

    public function bind($attribute)
    {
        $this->details = app(User::class)->tableQuery()->where('users.id', $attribute['id'])->get()->toArray()[0];
    }

    public function store()
    {
        $this->validate([
            'details.fullname' => 'required',
        ]);
        $params = array_merge($this->details, ['agency_id' => $this->agency_id, 'status' => 'pending']);
        
        Flight::query()->create($params);

        $this->emit('toast', 'Flight has been created!');
        $this->details = [];
        $this->emit('refreshDatatable');
    }

    public function edit($id)
    {
        $this->flight_id = $id;
        // $params = array_merge($this->details, ['agency_id' => $this->agency_id, 'status' => 'pending']);
        // dd($id);
        $this->details = Flight::query()->where('id', $id)->get()->toArray()[0];
        // dd($this->details);
    }

    public function update()
    {
        $this->validate([
            'details.fullname' => 'required',
        ]);
        Flight::query()
        ->updateOrCreate(['id' => $this->flight_id], $this->details);

        $this->emit('toast', 'Flight has been updated!');
        // $this->details = [];
        $this->emit('refreshDatatable');
    }

    public function destroy($id)
    {
        $this->flight_id = $id;
    }

    public function confirmDestroy()
    {
        Flight::query()->find($this->flight_id)->delete();

        $this->emit('refreshDatatable');
    }
}
