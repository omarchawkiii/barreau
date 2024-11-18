<?php

namespace App\Http\Controllers\Avocat\Stagiaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index()
    {
        return view('avocat.stagiaire.index');
    }

    public function create()
    {
        return view('avocat.stagiaire.ajouter');
    }
}
