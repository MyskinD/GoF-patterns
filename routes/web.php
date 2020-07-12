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

Route::get('generating', function () {
    return view('generating');
});

Route::get('structural', function () {
    return view('structural');
});

Route::get('behavioral', function () {
    return view('behavioral');
});

Route::group(['prefix' => 'behavioral'], function(){
    Route::group(['prefix' => 'strategy'], function() {
        Route::get('/', ['uses' => 'StrategyController@main', 'as' => 'strategy']);
        Route::get('mallard-duck', ['uses' => 'StrategyController@mallardDuck', 'as' => 'mallardDuck']);
        Route::get('model-duck', ['uses' => 'StrategyController@modelDuck', 'as' => 'modelDuck']);
    });
    Route::group(['prefix' => 'observer'], function () {
        Route::get('/', ['uses' => 'ObserverController@main', 'as' => 'observer']);
    });
});
