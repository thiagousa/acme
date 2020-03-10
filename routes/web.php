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

Route::get('/posts/{slug}','PostsController@show');

// ARTICLES

Route::get('articles', 'ArticlesController@index')->name('articles.index');

Route::post('articles','ArticlesController@store')->name('articles.store');

Route::get('articles/create','ArticlesController@create')->name('articles.create');

Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');

Route::get('articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');

Route::put('articles/{article}','ArticlesController@update')->name('articles.update');

Route::delete('articles/{article}','ArticlesController@sdelete')->name('articles.destroy');

