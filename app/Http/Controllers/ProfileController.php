<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // @desc Update profile info
    // @route PUT /profile
    public function update(Request $request): RedirectResponse {
        //Get logger in user
        $user = Auth::user();

        //Validate data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
        ]);

        //updaate user info
        $user->update($validatedData);

        return redirect()->route('dashboard')->with('success', 'Profile info updated!');
    }
}
