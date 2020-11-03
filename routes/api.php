<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::group([
    'prefix' => 'friends'
], function () {
    Route::middleware('auth:api')->group(function () {
        Route::post('send', 'FriendsInviteController@store');
        Route::post('accept', 'FriendsInviteController@accept');
        Route::get('decline', 'FriendsInviteController@decline');
    });

    Route::get('', 'FriendsInviteController@index');
    Route::get('{id}', 'FriendsInviteController@show');
    Route::put('{id}', 'FriendsInviteController@update');
    Route::delete('{id}', 'FriendsInviteController@destroy');
});
