<?php

namespace App\Http\Controllers;

use App\Http\Requests\LawyerControllerStoreRequest;
use App\Http\Requests\LawyerControllerUpdateRequest;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.admins.index');
    }


}
