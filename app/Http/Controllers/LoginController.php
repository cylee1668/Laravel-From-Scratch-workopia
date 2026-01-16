<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    // @desc Show login form
    // @route GET /login
    public function login(): View
    {
        return view('auth.login');
    }

    // @desc Authenticate user
    // @route POST /login
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([

            'email' => 'required|string|email|max:100',
            'password' => 'required|string',
        ]);

        dd($credentials);
    }
}
