<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Flight;
use App\Models\AgencyUser;
use App\Models\ForeignAgency;

class FlightTable extends DataTableComponent
{
    public string $defaultSortColumn    = 'id';
    public string $defaultSortDirection = 'desc';

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Fullname", "fullname")
                ->sortable()->searchable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make("Departure", "departure")
                ->sortable(),
            Column::make("Arrival", "arrival")
                ->sortable(),
            Column::make("FRA", "agency_name")
                ->sortable(),
            Column::make("Employer", "employer")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make('action')
            ->format(function ($value, $object, $rows) {

                return '
                <div class="d-flex flex-row">
                    <button type="button" class="btn btn-sm btn-info"
                    onclick="Livewire.emit(\'editFlight\','. $rows->id .')"
                    data-toggle="modal" data-target="#flightEdit">
                    <i class="fas fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger"
                    onclick="Livewire.emit(\'destroyFlight\','. $rows->id .')"
                    data-toggle="modal" data-target="#deleteModal">
                    <i class="fas fa-trash"></i>
                    </button>
                </div>
                ';
            })
            ->asHtml(),
        ];
    }

    public function query(): Builder
    {
        return Flight::query()
        ->when(auth()->user()->roles == 2)
        ->selectRaw('flights.*, foreign_agencies.agency_name')
        ->leftJoin('foreign_agencies', 'foreign_agencies.id', '=', 'flights.FRA_id');
    }
}
