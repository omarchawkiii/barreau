<?php

namespace Database\Seeders;

use App\Models\CatEvent;
use App\Models\CatNews;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatNews::create([
            'title' => CatNews::CATEGORY_PHOTOS,
            'slug'  => Str::slug(CatNews::CATEGORY_PHOTOS)
        ]);   
        CatNews::create([
            'title' => CatNews::CATEGORY_VIDEOS,
            'slug'  => Str::slug(CatNews::CATEGORY_VIDEOS)
        ]);  
        
        CatEvent::create([
            'title' => CatEvent::CATEGORY_ANNONCES,
            'slug'  => Str::slug(CatEvent::CATEGORY_ANNONCES)
        ]);  
        CatEvent::create([
            'title' => CatEvent::CATEGORY_DELIBERATION,
            'slug'  => Str::slug(CatEvent::CATEGORY_DELIBERATION)
        ]);  
        CatEvent::create([
            'title' => CatEvent::CATEGORY_MEMOIRES,
            'slug'  => Str::slug(CatEvent::CATEGORY_MEMOIRES)
        ]);  
    }
}
