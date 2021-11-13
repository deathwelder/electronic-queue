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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

// Route::get('/{id?}', 'App\Http\Controllers\MainController@addCount')->name('add-count');

Route::get('/{id}/update', 'App\Http\Controllers\MainController@update')->name('update');

Route::get('/queue', 'App\Http\Controllers\MainController@queue')->name('queue');

Route::get('/{id?}', 'App\Http\Controllers\MainController@inWork')->name('inWork');
