<?php

namespace App\Models;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DemandeServAgrement extends Model
{
    use HasFactory, SoftDeletes, SoftCascadeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_agrement_id',
        'dosseir_id',
        'stagiaire_id',
        'depot',
        'nom',
        'id_maitre_de_stage',
        'status',
    ];

    protected $softCascade = ['dossier'];

    public function typeAgrement()
    {
        return $this->belongsTo(TypeAgrement::class);
    }

    public function dossier()
    {
        return $this->hasMany(Dossier::class, 'demande_serv_agrement_id','id');
    }

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class,'stagiaire_id','id');
    }
}
