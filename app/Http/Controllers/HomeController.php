<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::limit(10)->orderBy('id', 'desc')->get();
        logger("Consulta de posts executada com sucesso.");
        dump($posts); // Use dump ao invés de dd

        return view('home', ['title' => 'Home - BLOG', 'posts' => $posts]);
    }

}
