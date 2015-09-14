<?php

Route::get('/', 'PostsController@index');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'manage', 'middleware' => 'auth'], function() {
    Route::get('/', 'PostsController@index');
});