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

Route::get('/', 'MovieController@home') -> name('home');

Route::get('movie/{id}', 'MovieController@movie') -> name('details');

Route::get('create/movie', 'MovieController@create') -> name('newMovie');
Route::post('store/movie', 'MovieController@store') -> name('store');
