<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CatEvent;
use App\Models\CatNews;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        $news_category_photos = CatNews::select(['id','title','slug'])->where("title", CatNews::CATEGORY_PHOTOS)
            ->with('news', fn($quey) => $quey->take(2))->first();
        $news_category_videos = CatNews::select(['id','title','slug'])->where("title", CatNews::CATEGORY_VIDEOS)
            ->with('news', fn($quey) => $quey->take(2))->first();

        $event_category_annonces = CatEvent::select(['id','title','slug'])->where("title", CatEvent::CATEGORY_ANNONCES)
            ->with('events', fn($quey) => $quey->take(3))->first();
        
        $event_category_deliberation = CatEvent::select(['id','title','slug'])->where("title", CatEvent::CATEGORY_DELIBERATION)
            ->with('events', fn($quey) => $quey->take(3))->first();
        
        $event_category_memoires = CatEvent::select(['id','title','slug'])->where("title", CatEvent::CATEGORY_MEMOIRES)
            ->with('events', fn($quey) => $quey->take(3))->first();
        
        return view('front.home', compact('news_category_photos','news_category_videos','event_category_annonces','event_category_deliberation','event_category_memoires'));
    }
}
