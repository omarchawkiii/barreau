<?php

namespace App\Http\Controllers\Front;

use App\Models\Event;
use App\Models\CatEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEventController extends Controller
{
    public function index(Request $request)
    {
        $event = Event::paginate(9);
        return view('front.event', compact('event'));
    }

    public function indexByCategory(Request $request, $category_id)
    {
        $category = CatEvent::find($category_id);
        $event = Event::where('cat_event_id', $category_id)->paginate(9);
        return view('front.event', compact('event','category'));
    }

    public function show(Event $event)
    {
        return view('front.event_details', compact('event'));
    }
    

}
