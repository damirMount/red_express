<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Offer;
use App\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $offers = Offer::all();
        $blogs = Blog::latest()->take(3)->get();
        $questions = Question::latest()->take(5)->get();
        return view('pages.home.index', compact('offers', 'blogs', 'questions'));
    }
}
