<?php

namespace App\Http\Controllers\Avocat\Plainte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlainteController extends Controller
{
    public function index()
    {
        return view('avocat.plainte.index');
    }

    public function create()
    {
        return view('avocat.plainte.deposer');
    }
}
