<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ScrutinController extends Controller
{
    /**
     * Display the user's profile form.
     */

        public function index(): View
    {
        return view('admin.scrutins.index');
    }

        public function create(): View
    {
        return view('admin.scrutins.add');
    }


    public function show(Request $request): View
    {
        $id=1;
        return view('admin.scrutins.show', [
            'user' => $id,
        ]);
    }
    public function edit(Request $request): View
    {
        $id=1;
        return view('admin.scrutins.edit', [
            'user' => $id,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('admin.scrutins.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id=1;
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
