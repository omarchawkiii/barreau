<?php

namespace App\Models;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stagiaire extends Model
{
    use HasFactory, SoftDeletes, SoftCascadeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'nom_ar',
        'prenom_ar',
        'date_naiss',
        'nom_fr',
        'prenom_fr',
        'etat',
        'date_serment',
        'lieu_serm',
        'adresse_domic',
        'fonction',
        'sexe',
        'depot',
        'mutation',
        'date_capa',
        'ex_proff',
        'scotab',
        'sit_prof',
        'datcosup',
        'lieu_nais_arb',
        'lieu_nais_fr',
        'willaya_nais_fr',
        'tel',
        'fax',
        'mob',
        'email',
        'n_act_nais',
        'nom_pere',
        'nom_mere',
        '',
    ];

    protected $appends = ['nomprenomfr'];

    public function demandeServAgrements()
    {
        return $this->hasMany(DemandeServAgrement::class, 'stagiaire_id');
    }

    public function getNomprenomfrAttribute()
    {
        return $this->nom_fr . ' ' . $this->prenom_fr;
    }

    public function nomPrenomAr()
    {
        return $this->nom_ar . ' ' . $this->prenom_ar;
    }
}
