<?php

namespace App\Http\Controllers;

use App\CatNews;
use App\Cat_news;
use App\Http\Requests\Cat_newsControllerStoreRequest;
use App\Http\Requests\Cat_newsControllerUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Cat_newsController extends Controller
{
    public function index(Request $request): Response
    {
        $catNews = CatNews::all();

        return view('cat_newses.index', compact('cat_newses'));
    }

    public function show(Request $request, Cat_news $catNews): Response
    {
        return view('cat_newses.index', compact('cat_newses'));
    }

    public function store(Cat_newsControllerStoreRequest $request): Response
    {
        $catNews = CatNews::create($request->validated());

        return redirect()->route('cat_newses.index', [$cat_newses]);
    }

    public function update(Cat_newsControllerUpdateRequest $request, Cat_news $catNews): Response
    {
        $catNews->save();

        return redirect()->route('cat_newses.index', [$cat_newses]);
    }

    public function destroy(Request $request, Cat_news $catNews): Response
    {
        $catNews->delete();

        return redirect()->route('cat_newses.index', [$cat_newses]);
    }
}
