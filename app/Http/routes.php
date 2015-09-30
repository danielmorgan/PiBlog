<?php

Route::get('/', 'PostsController@index');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'editor', 'middleware' => 'auth'], function() {
    Route::get('/', 'EditorController@index');
});