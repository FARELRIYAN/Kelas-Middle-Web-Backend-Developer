<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        Session::put('username', $request->username);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('dashboard', ['username' => Session::get('username')]);
    }

    public function logout()
    {
        Session::forget('username');
        return redirect()->route('login');
    }
}
