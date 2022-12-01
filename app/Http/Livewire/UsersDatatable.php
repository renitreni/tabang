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
            Column::make('action')
                  ->format(function ($value, $object, $rows) {

                      return '
                      <div class="d-flex flex-row">
                        <button type="button" class="btn btn-sm btn-info"
                        onclick="Livewire.emit(\'editUser\','. $rows->id .')"
                        data-toggle="modal" data-target="#userEdit">
                        <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger"
                        onclick="Livewire.emit(\'destroyUser\','. $rows->id .')"
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
        return User::query();
    }
}
