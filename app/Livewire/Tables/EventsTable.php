<?php

namespace App\Livewire\Tables;

use App\Models\Event;
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

class EventsTable extends DataTableComponent
{
    protected $model = Event::class;

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
            Column::make('id', 'id')
                ->sortable()
                ->hideIf(true),
            Column::make('thumbnail', 'thumbnail')
                ->hideIf(true),
            Column::make('Titre', 'title')
                ->sortable()
                ->searchable(),
            
            ImageColumn::make('Image')
                ->location(function($row) {
                    info($row);
                    return $row->thumbnail_url;
                })->attributes(fn($row) => [
                    'class' => 'avatar-xl',
                    'alt' => $row->name . ' Avatar',
                ]),
            Column::make('Catégorie', 'catEvent.title'),
            Column::make('Slug', 'slug')
                ->deselected(),
            Column::make('Content', 'content')
                ->searchable()
                ->deselected(),
            
            
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
