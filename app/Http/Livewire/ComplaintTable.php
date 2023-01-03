<?php

namespace App\Http\Livewire;

use App\Models\AgencyUser;
use App\Models\Applicant;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Complaint;

class ComplaintTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Fullname", "fullname")
                ->sortable(),
            Column::make("Birthdate", "birthdate")
                ->sortable(),
            Column::make("Gender", "gender")
                ->sortable(),
            Column::make("Passport no", "passport_no")
                ->sortable(),
            Column::make("Occupation", "occupation")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Contact person", "contact_person")
                ->sortable(),
            Column::make("Contact 1", "contact_1")
                ->sortable(),
            Column::make("Contact 2", "contact_2")
                ->sortable(),
            Column::make("Longitude", "longitude")
                ->sortable(),
            Column::make("Latitude", "latitude")
                ->sortable(),
            Column::make("Complaint", "complaint")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Complaint::query()
            ->when(auth()->user()->roles == 2, function ($q) {

                $agency = AgencyUser::query()->select('agency_id')->where('user_id', auth()->id())->first();

                $q->where('agency_id', $agency->agency_id);
            });
    }
}
