<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class UsersDatatable extends DataTableComponent
{
    public string $defaultSortColumn    = 'id';
    public string $defaultSortDirection = 'desc';

    public function columns(): array
    {
        return [
            Column::make('id')->sortable(),
            Column::make('email')->sortable()->searchable(),
            Column::make('roles')->sortable()->format(function ($value) {
                $role = 'User';
                $role = $value == 1 ? 'Admin' : $role;
                return $value == 2 ? 'Agency' : $role;
            }),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }
}
