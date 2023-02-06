<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {

        $posts = Post::where('user_id', $user->id)->get();

        return view('pages.wall', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
