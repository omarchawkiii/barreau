<?php

namespace App\Livewire\Tables;

use App\Models\User;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class LawyersTable extends DataTableComponent
{
    protected $model = Lawyer::class;

    public $columnSearch = [
        'nom_arb' => null,
        'nom_fr' => null,
        'prenom_fr' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSingleSortingDisabled()
            ->setFilterLayoutSlideDown()
            ->setSecondaryHeaderTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })

            ->setFooterTrAttributes(function ($rows) {
                return ['class' => 'bg-gray-100'];
            })
            ->setFooterTdAttributes(function (Column $column, $rows) {
                if ($column->isField('name')) {
                    return ['class' => 'text-green-500'];
                }

                return ['default' => true];
            })
            ->setUseHeaderAsFooterEnabled()
            ->setHideBulkActionsWhenEmptyEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make('id', 'id')
                ->sortable()
                ->hideIf(true),
            Column::make('ID', 'code')
                ->sortable()
                ->searchable(),
            Column::make('Nom AR', 'nom_arb')
                ->sortable()
                ->searchable(),
            // ->secondaryHeader(function() {
            //     return view('tables.input-search', ['field' => 'nom_arb', 'columnSearch' => $this->columnSearch]);
            // })
            // ->html(),
            Column::make('Prenom AR', 'prenom_arb')
                ->sortable()
                ->searchable(),
            DateColumn::make('Date Naiss', 'date_naiss')
                ->sortable(),
            Column::make('Nom FR', 'nom_fr')
                ->sortable()
                ->searchable(),
            Column::make('Prenom FR', 'prenom_fr')
                ->sortable()
                ->searchable(),
            Column::make('etat', 'etat')
                ->sortable()
                ->searchable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('date_serment', 'date_serment')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('lieu_serm', 'lieu_serm')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('grade', 'grade')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('tribunal', 'tribunal')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('adresse_prof_arb', 'adresse_prof_arb')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('commune', 'commune')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('willaya', 'willaya')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('adresse_fr', 'adresse_fr')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('fin_contrat_local', 'fin_contrat_local')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('date_expir_carte', 'date_expir_carte')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('local', 'local')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('adresse_domic', 'adresse_domic')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('majles', 'majles')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('fonction', 'fonction')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('sexe', 'sexe')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('depot', 'depot')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('mutation', 'mutation')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('date_capa', 'date_capa')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('ex_proff', 'ex_proff')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('scotab', 'scotab')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('sit_prof', 'sit_prof')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('date_reglement', 'date_reglement')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('datcosup', 'datcosup')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('lieu_nais_arb', 'lieu_nais_arb')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('lieu_nais_fr', 'lieu_nais_fr')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('willaya_nais_fr', 'willaya_nais_fr')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            DateColumn::make('fin_carte_prof', 'fin_carte_prof')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('tel', 'tel')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('fax', 'fax')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('mob', 'mob')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('email', 'email')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('num_act_nais', 'num_act_nais')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('nom_pere', 'nom_pere')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            Column::make('nom_mere', 'nom_mere')
                ->sortable()
                ->deselected()
                ->hideIf(Auth::guest()),
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->hideIf(Auth::guest())
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
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
