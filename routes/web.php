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

/**
 * HOME PAGE
 */
Route::get('/', 'HomeController@index')->name('home-page');

/**
 * COMICS DETAIL
 */
// A
// Route::get('/comic/{id}', 'ComicController@show')->name('comic-detail');

// B
Route::get('/comic/{slug}', 'ComicController@show')->name('comic-detail');