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
    return view('welcome');
});

Route::get('/about', function(){

    $article = App\Article::take(3)->latest()->get();


    return view('about', ['articles' => $article]);

});

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::put('/articles/{article}', 'ArticlesController@update');



//To send Mails-----------------------
Route::get('/contact', 'ContactController@show');

Route::post('/contact', 'ContactController@store')->name('contact');
