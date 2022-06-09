<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Request $request, Blog $blog)
    {
        return view('pages.news.view_news', compact('blog'));
    }
}
