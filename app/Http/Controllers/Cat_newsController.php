<?php

namespace App\Http\Controllers;

use App\Models\CatNews;

use App\Http\Requests\Cat_newsControllerStoreRequest;
use App\Http\Requests\Cat_newsControllerUpdateRequest;
use App\Models\CatNews as ModelsCatNews;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Cat_newsController extends Controller
{
    public function index(Request $request)
    {
        $catNews = CatNews::all();

        return view('admin.cat_newses.index', compact('catNews'));
    }


}
