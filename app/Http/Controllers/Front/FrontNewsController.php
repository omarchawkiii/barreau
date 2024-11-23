<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\CatNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontNewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::paginate(9);
        return view('front.news', compact('news'));
    }

    public function indexByCategory(Request $request, $category_id)
    {
        $category = CatNews::find($category_id);
        $news = News::where('cat_news_id', $category_id)->paginate(9);
        return view('front.news', compact('news','category'));
    }
    

}
