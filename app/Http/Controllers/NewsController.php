<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsControllerStoreRequest;
use App\Http\Requests\NewsControllerUpdateRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $newses = News::all();
        return view('admin.newses.index', compact('newses'));
    }
}
