<?php

Route::get('/', 'PostsController@index');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => 'editor', 'middleware' => 'auth'], function() {
    Route::get('/', 'EditorController@index');
    Route::get('post/{id}', 'EditorController@postEditor');
});