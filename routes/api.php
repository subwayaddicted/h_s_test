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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

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
    'prefix' => 'invites'
], function () {
    Route::middleware('auth:api')->group(function () {
        Route::post('send', 'FriendsInviteController@store')->name('send');
        Route::post('accept', 'FriendsInviteController@accept')->name('api/accept');
        Route::get('decline', 'FriendsInviteController@decline')->name('api/decline');
    });

    Route::get('', 'FriendsInviteController@index');
    Route::get('{id}', 'FriendsInviteController@show');
    Route::put('{id}', 'FriendsInviteController@update');
    Route::delete('{id}', 'FriendsInviteController@destroy');
});
