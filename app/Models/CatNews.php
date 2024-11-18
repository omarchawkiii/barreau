<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class CatNews extends Model
{
    use HasFactory;

    public const CATEGORY_PHOTOS = "Photos";
    public const CATEGORY_VIDEOS = "Vidéos";
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




    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
