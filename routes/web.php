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

Route::name('admin.')
//    ->middleware('auth')
    ->prefix('admin')
    ->group(function () {
        Route::resources([
            'blogs' => 'AdminPart\BlogController',
            'blog-categories' => 'AdminPart\BlogCategoryController',
            'blog-tags' => 'AdminPart\BlogTagController',
            'offers' => 'AdminPart\OfferController',
            'questions' => 'AdminPart\QuestionController'
        ]);
    });


Route::get('/home', 'HomeController@index')->name('home');
