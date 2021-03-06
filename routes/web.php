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

Route::get('/lesson', 'App\Http\Controllers\lessonController@index');

Route::get('/posts', 'App\Http\Controllers\postController@index');
Route::get('/posts/create', 'App\Http\Controllers\postController@create');
