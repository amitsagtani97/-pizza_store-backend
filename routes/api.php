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


Route::group(['prefix' => 'api/'], function () {
    Route::resource('users', 'App\Api\V1\Controllers\UserController');
    Route::resource('orders', 'App\Api\V1\Controllers\PizzaController');
    Route::resource('pizzas', 'App\Api\V1\Controllers\PizzaController');
    //  Route::post('/payment-success', 'OrderController@payment_success');
});
