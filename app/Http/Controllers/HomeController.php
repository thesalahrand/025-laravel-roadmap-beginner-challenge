<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::with(['category', 'tags'])->latest()->limit(10)->get();

        return view('home', compact('posts'));
    }
}
