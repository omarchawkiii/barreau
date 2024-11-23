<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\CatNews;
use App\Models\CatEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        return view('front.news');
    }
}
