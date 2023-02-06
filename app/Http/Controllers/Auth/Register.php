<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Register extends Controller
{
    public function index () 
    {
        return view('pages.auth.register');
    }

    public function storage (Request $request)
    {

        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required|max:30|min:3',
            'username' => 'required|max:30|min:3|unique:users',
            'email' => 'required|email|max:80|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('posts.index', ['user' => auth()->user()]);
    
    }
}
