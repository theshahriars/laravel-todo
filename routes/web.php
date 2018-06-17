<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Auth routes
Auth::routes();

// Home or Root route
Route::get('/', 'HomeController@index')->middleware('guest')->name('home.index');

