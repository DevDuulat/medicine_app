<?php

namespace App\Http\Controllers;

use App\Models\Analyses;
use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        return view('contacts');
    }
    public function analyses()
    {
        $analyses = Analyses::all();
        return view('analyses' ,compact('analyses'));
    }
    public function newShow($id)
    {
        $post = Post::findOrFail($id);
        return view('post_show', compact('post'));
    }

}
