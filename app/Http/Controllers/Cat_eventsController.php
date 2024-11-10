<?php

namespace App\Http\Controllers;


use App\Models\CatEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Cat_eventsController extends Controller
{
    public function index(Request $request)
    {
        $catNews = CatEvent::all();

        return view('admin.cat_events.index', compact('catNews'));
    }
}
