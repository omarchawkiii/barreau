<?php

namespace App\Http\Controllers\Avocat\Recours;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecoursController extends Controller
{
    public function index()
    {
        return view('avocat.recours.index');
    }

    public function create()
    {
        return view('avocat.recours.ajouter');
    }
}
