<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function post(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } 
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dashboard');
    }

}
