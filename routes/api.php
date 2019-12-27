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





Route::post('register', 'V1\UserController@register');
Route::post('login', 'V1\UserController@login');

    Route::resource('customers', 'V1\CustomerController');

/*
Route::middleware('auth:api')->group( function () {
});
*/