<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dossier extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'demande_serv_agrement_id',
        'numero_dossier',
        'demande',
        'documents',
    ];

    public function demandeServAgrement()
    {
        return $this->belongsTo(DemandeServAgrement::class);
    }

    protected $casts = [
        'documents' => 'array',  // Cast the 'documents' field to an array
    ];
}
