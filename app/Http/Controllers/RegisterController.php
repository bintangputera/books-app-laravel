<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function register() {
        return view('auth.register');
    }

    function post(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'password' => 'required|min:8',
            'address' => 'required'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birth_place = $request->birth_place;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;
        $user->password = \Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }

}
