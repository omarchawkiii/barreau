<?php

namespace App\Http\Controllers;

use App\Models\CatEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        $cat_events = CatEvent::all() ;
        return view('admin.events.index', compact('events','cat_events'));
    }
}
