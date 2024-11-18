<?php

namespace App\Http\Controllers\Avocat\Formation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        return view('avocat.formation.index');
    }

    public function create()
    {
        return view('avocat.formation.ajouter');
    }
}
