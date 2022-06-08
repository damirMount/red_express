<?php

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

Route::get('/', function () {
    return view('pages.home.index');
});
Route::get('/news', function() {
    return view('pages.news.blogs_news');
});
Route::name('admin.')
    ->middleware('admin')
    ->prefix('admin')
    ->group(function () {
        Route::resources([
            'blogs' => 'AdminPart\BlogController',
            'blog-categories' => 'AdminPart\BlogCategoryController',
            'blog-tags' => 'AdminPart\BlogTagController',
        ]);
    });
