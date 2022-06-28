<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

Route::get('/', 'HomeController@index');
Route::get('/qr', 'HomeController@index');

Route::get('/news', 'BlogController@listBlog')->name('list.blog');

Route::get('/new/{blog}', 'BlogController@show')->name('new.show');

Route::name('admin.')
//    ->middleware()
    ->prefix('admin')
    ->group(function () {
        Route::resources([
            'blogs' => 'AdminPart\BlogController',
            'offers' => 'AdminPart\OfferController',
            'questions' => 'AdminPart\QuestionController'
        ]);
    });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('getInvoice/', 'InvoiceController@getInvoice')->name('get.invoice');
Route::get('get-questions/', 'HomeController@getQuestions')->name('get.questions');
Route::get('test', function (){
    $response = Http::
        withHeaders([
            'Content-Type' => 'application/json; charset=utf-8'
        ])
        ->get('https://212.112.99.14:8080');
//    dd('daw');


//    $ip = '212.112.99.14';
//    $port = '8080';
//    $url = $ip . ':' . $port;
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
//    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, [
//        'Authorization: Basic ' . base64_encode('обмен' . ":" . 'qa1')]
//    );
//    $data = curl_exec($ch);
//    dd($data);
//    $health = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//    curl_close($ch);
//    if ($health) {
//        $json = json_encode(['health' => $health, 'status' => '1']);
//        return $json;
//    } else {
//        $json = json_encode(['health' => $health, 'status' => '0']);
//        return $json;
//    }


    $cargo = json_decode($response, true);

    if (isset($cargo['number_id']))
    {
        return App\Service\InvoiceGetter::timeCalc($cargo);
    }
    else{
        return $cargo;
    }
});
