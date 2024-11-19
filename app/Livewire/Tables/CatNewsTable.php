<?php

namespace App\Livewire\Tables;

use App\Models\CatNews;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class CatNewsTable extends DataTableComponent
{
    protected $model = CatNews::class;


    public $columnSearch = [
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSingleSortingDisabled()
            ->setFilterLayoutSlideDown()
            ->setUseHeaderAsFooterEnabled();
    }

    public function query()
    {
        return CatNews::withCount('news');
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
            // Column::make("Nombre des news","news_count"),
        
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->buttons([
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
