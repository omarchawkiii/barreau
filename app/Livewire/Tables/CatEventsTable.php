<?php

namespace App\Livewire\Tables;

use App\Models\CatEvent;
use App\Models\User;
use App\Models\Lawyer;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class CatEventsTable extends DataTableComponent
{
    protected $model = CatEvent::class;


    public $columnSearch = [
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSingleSortingDisabled()
            ->setFilterLayoutSlideDown()
            ->setUseHeaderAsFooterEnabled();
    }


    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable(),
            Column::make('Titre', 'title')
                ->sortable()
                ->searchable(),
            Column::make('Slug', 'slug')
                ->deselected(),
            Column::make("Nombre d'événements")
                ->label(fn ($row, Column $column) => $row->events()->count()),
        
            
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->buttons([
                    LinkColumn::make('view')
                        ->title(fn($row) => '<i class="mdi mdi-eye text-success"></i>')->html()
                        ->location(fn($row) => 'javascript:void(0);')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'action-icon',
                                'onclick' => "view($row->id)",
                            ];
                        }),
                    LinkColumn::make('modifier')
                        ->title(fn($row) => '<i class="mdi mdi-square-edit-outline text-warning"></i>')->html()
                        ->location(fn($row) => 'javascript:void(0);')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'action-icon',
                                'onclick' => "edit($row->id)",
                            ];
                        }),
                    LinkColumn::make('delete')
                        ->title(fn($row) => '<i class="mdi mdi-delete text-danger"></i>')->html()
                        ->location(fn($row) => 'javascript:void(0);')
                        ->attributes(function ($row) {
                            return [
                                'class' => 'action-icon',
                                'onclick' => "confirmDeletion($row->id)",
                            ];
                        }),

                ]),
        ];
    }
}
