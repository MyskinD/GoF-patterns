<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'strategy'], function()
{
    Route::match(['get'], '/', ['uses' => 'StrategyController@main', 'as' => 'strategy']);
    Route::match(['get'], 'mallard-duck', ['uses' => 'StrategyController@mallardDuck', 'as' => 'mallardDuck']);
    Route::match(['get'], 'model-duck', ['uses' => 'StrategyController@modelDuck', 'as' => 'modelDuck']);

});

