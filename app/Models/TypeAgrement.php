<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeAgrement extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_fr',
        'nom_ar',
        'frais',
    ];

    public function  demandeServAgrement()
    {
        return $this->hasMany(DemandeServAgrement::class);
    }
}
