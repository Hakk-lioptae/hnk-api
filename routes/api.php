<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::group(['prefix' => 'auth'], function () {

    Route::post('/login', 'UserController@register');
    Route::post('/register', 'UserController@register');
    Route::post('/logout', 'UserController@register');
    Route::post('/reset-password ', 'UserController@register');
});

Route::group(['prefix' => 'profile'], function () {
    Route::post('/{id}/delivery-address', 'UserController@register');
    Route::get('/{id}/delivery-address', 'UserController@register');
    Route::put('/{id}/delivery-address/{id}', 'UserController@register');
    Route::delete('/{id}/delivery-address{id}', 'UserController@register');

});

    Route::get('/item','UserController@register');
