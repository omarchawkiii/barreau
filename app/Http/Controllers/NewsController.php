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
    public function index(Request $request): Response
    {
        $news = News::all();

        return view('newses.index', compact('newses'));
    }

    public function show(Request $request, News $news): Response
    {
        return view('newses.show', compact('news'));
    }

    public function store(NewsControllerStoreRequest $request): Response
    {
        $news = News::create($request->validated());

        return redirect()->route('newses.index', [$newses]);
    }

    public function update(NewsControllerUpdateRequest $request, News $news): Response
    {
        $news->save();

        return redirect()->route('newses.index', [$newses]);
    }

    public function destroy(Request $request, News $news): Response
    {
        $news->delete();

        return redirect()->route('newses.index', [$newses]);
    }
}
