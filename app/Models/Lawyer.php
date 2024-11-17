<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lawyer extends Model
{
    use HasFactory;

    public const MALE = "male";
    public const FEMALE = "female";

    public const GENDER = [self::MALE, self::FEMALE];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'nom_arb',
        'prenom_arb',
        'date_naiss',
        'nom_fr',
        'prenom_fr',
        'etat',
        'date_serment',
        'lieu_serm',
        'grade',
        'tribunal',
        'adresse_prof_arb',
        'commune',
        'willaya',
        'adresse_fr',
        'fin_contrat_local',
        'date_expir_carte',
        'local',
        'adresse_domic',
        'majles',
        'fonction',
        'sexe',
        'depot',
        'mutation',
        'date_capa',
        'ex_proff',
        'scotab',
        'sit_prof',
        'date_reglement',
        'datcosup',
        'lieu_nais_arb',
        'lieu_nais_fr',
        'willaya_nais_fr',
        'fin_carte_prof',
        'tel',
        'fax',
        'mob',
        'email',
        'num_act_nais',
        'nom_pere',
        'nom_mere',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_naiss' => 'date',
        'date_serment' => 'date',
        'fin_contrat_local' => 'date',
        'date_expir_carte' => 'date',
        'date_capa' => 'date',
        'date_reglement' => 'date',
        'datcosup' => 'date',
        'fin_carte_prof' => 'date',
        'user_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
