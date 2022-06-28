<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Offer;
use App\Question;
use App\Service\InvoiceGetter;
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
        $questionIds = Question::latest()->take(5)->pluck('id')->toArray();
        $invoice = 0;
        if ($request->has('invoice')) {
            $invoice = InvoiceGetter::getInvoice($request->invoice);
        }
        return view('pages.home.index', compact('offers', 'blogs', 'questions', 'invoice', 'questionIds'));
    }

    public function getQuestions(Request $request)
    {
        $questions = Question::whereNotIn('id', $request->ids)->get();
        $view = view('components.accordion.ques_accordion', compact('questions'))->render();

        return response()->json(['view' => $view]);
    }
}
