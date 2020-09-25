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

route::get('/about', 'AboutController@show')->name('about');
route::get('news', 'NewsController@index')->name('news');
route::get('news/create', 'NewsController@create')->name('news.create');
route::get('news/store', 'NewsController@store')->name('news.store');
route::get('news/{id}', 'NewsController@show')->name('news.show');
route::get('/overzicht', 'OverzichtController@show')->name('overzicht');
