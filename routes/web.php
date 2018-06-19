<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/test', function () {
    return view('test');
});

Route::get('/send/{msg?}', 'TestController@index');

Route::group(['namespace' => 'Drama'], function () {
    Route::resource('/', 'IndexController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Message', 'middleware' => 'auth'], function () {
    Route::resource('/message', 'IndexController@index');

    Route::resource('/bind', 'IndexController@bind');

});
