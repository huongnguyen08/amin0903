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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::match(['get','post'],'login',"AdminController@ogin");

Route::get('login',"AdminController@getLogin")->name('login');
Route::post('login',"AdminController@postLogin")->name('login');

Route::get('register',"AdminController@getRegister")->name('get-register');
Route::post('register',"AdminController@postRegister")->name('register');

Route::get('admin',"AdminController@getHome")->name('home');