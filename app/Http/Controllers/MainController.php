<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class MainController extends Controller
{
    //
    public function index()
    {
        $posts = Post::take(3)->get();

        return view('pages.home', ['posts' => $posts]);
    }

}
