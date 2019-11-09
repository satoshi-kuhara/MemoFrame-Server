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

$path = "/".config('routing.inputUrl');

Route::get('/', function () {
    return view('welcome');
});

Route::get($path, function(){
    return view('myboard_insert');
});
