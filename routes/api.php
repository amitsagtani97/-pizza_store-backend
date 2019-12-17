<?php

use Illuminate\Support\Facades\Route;
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

$basePath = '\App\Api\V1\Controllers\\';

Route::group(['prefix' => 'v1'], function () use ($basePath) {
    Route::get('login', $basePath . 'AuthController@login');

    Route::resource('orders', $basePath . 'PizzaController');
    Route::resource('pizzas', $basePath . 'PizzaController');

    Route::group(['middleware' => 'jwt.auth'], function () use($basePath){
        Route::get('me', $basePath . 'UserController@me');
    });
    //  Route::post('/payment-success', 'OrderController@payment_success');
});
