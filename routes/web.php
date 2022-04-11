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


//display a specific admin
Route::get('/', 'HomeworksController@index')->name('home');

//display a specific user
Route::get('/post/{id}','HomeworksController@show_post')->name('showPost');

Route::post('/user','HomeworksController@create_user')->name('adduser');