<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'comments'])->paginate(4);
        return view('posts', ['title' => 'Posts', 'posts' => $posts]);
        dd($posts);

    }
}
