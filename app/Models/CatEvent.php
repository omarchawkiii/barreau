<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CatEvent extends Model
{
    use HasFactory;

    public const CATEGORY_ANNONCES = "Annonces";
    public const CATEGORY_DELIBERATION = "Délibération";
    public const CATEGORY_MEMOIRES = "Mémoires et déclartion";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
