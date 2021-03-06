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


// Pass Optional parameter through URL
Route::get('user/{name?}', function ($name = null) {
    return "Hello $name";
});

Route::get('/home', 'HomeController');

