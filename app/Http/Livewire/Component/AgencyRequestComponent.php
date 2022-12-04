<?php

namespace App\Http\Livewire\Component;

use App\Models\Agency;
use App\Models\Applicant;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AgencyRequestComponent extends Component
{
    public ?string $code = null;
    public ?array $application = null;

    // 4916318560868029
    public function render(): Factory|View|Application
    {
        $this->application = collect(Applicant::query()->where('user_id', auth()->id())->first() ?? [])->toArray();

        return view('livewire.component.agency-request-component');
    }

    public function send()
    {
        $this->validate(['code' => 'required|exists:agencies,agency_code']);

        $agency = Agency::query()->select('id')->where('agency_code', $this->code)->first();

        Applicant::query()->updateOrCreate(['user_id' => auth()->id()],
            [
                'agency_id' => $agency->id,
                'user_id' => auth()->id(),
                'status' => 0,
            ]);

        $this->emit('toast', 'Request sent to Agency!');
    }
}
