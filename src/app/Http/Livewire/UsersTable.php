<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public array $bulkActions = [
        'delete' => 'Excluir Selecionados',
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
            LinkColumn::make('')
                ->title(function ($row) {
                    return '<i class="fas fa-edit"></i>';
                })
                ->location(function ($row) {
                    return route('user.edit', ['id' => $row->id]);
                })
                ->attributes(function ($row) {
                    return [
                        'title' => 'Editar',
                        'class' => 'btn btn-warning btn-circle shadow-sm btn-sm',
                    ];
                }),
            LinkColumn::make('')
                ->title(function ($row) {
                    return '<i class="fas fa-trash"></i>';
                })
                ->location(function ($row) {
                    return route('user.destroy',$row->id);
                })
                ->attributes(function ($row) {
                    return [
                        'title' => 'Excluir',
                        'class' => 'btn btn-danger btn-circle shadow-sm btn-sm',
                    ];
                }),
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
        ];
    }

    public function delete(): void
    {
        User::whereIn('id', $this->getSelected())
            ->where('id', '<>', Auth::user()->id)->delete();

        $this->clearSelected();
    }
}
