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

Route::get("test", function(){
    $user = \App\User::first();
    $user->notify(new \App\Notifications\Test("hello"));
});
Route::view("passport", "passport");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
