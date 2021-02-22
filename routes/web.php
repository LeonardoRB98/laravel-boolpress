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

Route::resource('posts', 'PostController');

// frot end
Route::get('/blog/{slug}', 'BlogController@show')->name('post');

// rotta creazione nuovo commento metodo post perché è un form
Route::post('/blog/{id}/comment', 'BlogController@addComment')->name('add-comment'); // name('') = nome rotta
