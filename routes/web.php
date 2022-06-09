<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('admin', 'admin/blogs');

Route::get('/', function () {
    return view('pages.home.index');
});

Route::get('/news', function() {
    return view('pages.news.blogs_news');
});

Route::get('/news/view/blog', function() {
    return view('pages.news.view_news');
});

Route::name('admin.')
    ->middleware('auth')
    ->prefix('admin')
    ->group(function () {
        Route::resources([
            'blogs' => 'AdminPart\BlogController',
            'offers' => 'AdminPart\OfferController',
            'questions' => 'AdminPart\QuestionController'
        ]);
    });

Route::get('/home', 'HomeController@index')->name('home');
