<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog()
    {
        $blogs = Blog::paginate(3);
        return view('pages.news.blogs_news', compact('blogs'));
    }

    public function show(Request $request, Blog $blog)
    {
        $another_blogs = Blog::where('id', '<>', $blog->id)->get();
        return view('pages.news.view_news', compact('blog', 'another_blogs'));
    }
}
