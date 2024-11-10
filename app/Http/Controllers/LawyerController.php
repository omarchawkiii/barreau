<?php

namespace App\Http\Controllers;

use App\Http\Requests\LawyerControllerStoreRequest;
use App\Http\Requests\LawyerControllerUpdateRequest;
use App\Models\Lawyer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LawyerController extends Controller
{
    public function index(Request $request)
    {
        $lawyers = Lawyer::all();

        return view('admin.lawyers.index', compact('lawyers'));
    }


}
