<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function login ()
    {
        return view('pages.auth.login');
    }

    public function store (Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('posts.index', ['user' => auth()->user()]);
    }
}
