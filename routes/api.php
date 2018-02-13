<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function (Request $request) {
    return $request->all();
});

Route::middleware('auth:api')->group(function () {

    Route::get('/user', function (Request $request) {
        return resError($request->user());
    });

    Route::get('user/profile', 'HomeController@index');

});

