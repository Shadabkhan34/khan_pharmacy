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

Route::get("index","new_Controller@lndex");

Route::get('insert' ,'new_Controller@insertRec');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user', 'new_Controller@showUser');
Route::get("/delete/{ID}" , "new_Controller@dele");

Route::get('index','new_Controller@index');