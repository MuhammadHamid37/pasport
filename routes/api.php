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
Route::get('/test', function (Request $request) {
    return response()->json(0);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::group(['prefix' => 'auth:api'],function () {
    Route::post('login', 'authController@login');
    Route::post('signup', 'authController@signup');

    Route::group(['middleware' => 'auth'],function () {
        Route::get('logout', 'authController@logout');
        Route::get('profile', 'authController@profile');
    
    });

});
*/