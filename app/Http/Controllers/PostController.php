<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {

        $posts = Post::where('user_id', $user->id)->paginate(8);

        return view('pages.profile', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('pages.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required'
        ]);

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts.index', auth()->user()->username);
    }

    public function show(Post $post)
    {
        return view('pages.post.show', [
            'post' => $post
        ]);
    }
}
