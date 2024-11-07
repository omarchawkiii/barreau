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
    public function index(Request $request): Response
    {
        $lawyers = Lawyer::all();

        return view('lawyers.index', compact('locations'));
    }

    public function show(Request $request, Lawyer $lawyer): Response
    {
        return view('lawyers.show', compact('layer'));
    }

    public function store(LawyerControllerStoreRequest $request): Response
    {
        $lawyer = Lawyer::create($request->validated());

        return redirect()->route('lawyers.index', [$layers]);
    }

    public function update(LawyerControllerUpdateRequest $request, Lawyer $lawyer): Response
    {
        return redirect()->route('lawyers.index', [$layers]);
    }

    public function destroy(Request $request, Lawyer $lawyer): Response
    {
        $lawyer->delete();

        return redirect()->route('lawyers.index', [$layers]);
    }
}
