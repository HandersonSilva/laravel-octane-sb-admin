<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public array $bulkActions = [
        'delete' => 'Excluir',
        'edit' => 'Editar',
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSortingStatus(true);
        $this->setHideBulkActionsWhenEmptyStatus(true);
        /**
         * Adicionar click a linha
         */
//        $this->setTableRowUrl(function ($row) {
//            return route('user.edit', ['id' => $row->id]);
//        })
//            ->setTableRowUrlTarget(function ($row) {
//                return '_self';
//            });
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
            ImageColumn::make('Avatar')
                ->location(function ($row) {
                    return asset('img/undraw_profile.svg');
                })
                ->attributes(function ($row) {
                    return [
                        'class' => 'w-8 h-8 rounded-full',
                    ];
                }),
            LinkColumn::make('Ação')
                ->title(function ($row) {
                    return '<i class="fas fa-edit"></i>';
                })
                ->location(function ($row) {
                    return route('user.edit', ['id' => $row->id]);
                })
                ->attributes(function ($row) {
                    return [
                        'class' => 'btn btn-warning btn-circle shadow-sm btn-sm',
                    ];
                }),
        ];
    }

    public function delete(): void
    {
        User::whereIn('id', $this->getSelected())->delete();

        $this->clearSelected();
    }

    public function edit(): void
    {
        redirect()->route('user', ['id' => $this->getSelected()[0]]);

        $this->clearSelected();
    }
}