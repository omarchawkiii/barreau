<?php

namespace App\Http\Controllers;

use App\CatEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Cat_eventsController extends Controller
{
    public function index(Request $request): Response
    {
        $catEvents = CatEvent::all();
    }
}
