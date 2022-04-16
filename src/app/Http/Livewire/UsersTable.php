<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSortingStatus(true);
        $this->setSecondaryHeaderStatus(true);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->format(
                    fn($value, $row, Column $column) => date('d/m/Y H:i', strtotime($row->created_at))
                )
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->format(
                    fn($value, $row, Column $column) => date('d/m/Y H:i', strtotime($row->updated_at))
                )
                ->sortable(),
        ];
    }
}
