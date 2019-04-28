<?php

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

Route::get('/', 'IndexController@index')-> name('home');
Route::get('/comics', 'IndexController@comicsPage')-> name('comics');
Route::get('/animations', 'IndexController@animPage')-> name('animations');
Route::get('/animationDisplay/{ID}', 'IndexController@animDisplay')-> name('animationDisplay');
Route::get('/games', 'IndexController@gamesPage')-> name('games');
