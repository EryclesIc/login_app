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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login_inf', 'LoginController@login')->name('login_inf');

Route::get('/register', 'RegistroController@register')->name('register');
Route::post('/register_inf', 'RegistroController@dados')->name('register_inf');
