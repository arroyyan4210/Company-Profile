<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(10);
        return view('pages.blog', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        return view('pages.blog_show', ['post' => $post]);
    }
}
