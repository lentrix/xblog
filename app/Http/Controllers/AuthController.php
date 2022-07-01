<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm() {
        return view('pages.login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'string|required',
            'password' => 'string|required'
        ]);

        $login = auth()->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('Error','Invalid user credentials.');
        }

        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }


}
