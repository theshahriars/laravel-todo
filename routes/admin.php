<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Dashboard routes
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');

// Settings routes
Route::prefix('settings')->group(function () {
    Route::get('profile', 'SettingsController@profile')->name('settings.profile');
    Route::post('profile', 'SettingsController@profileUpdate')->name('settings.profile.update');
    Route::get('password', 'SettingsController@password')->name('settings.password');
    Route::post('password', 'SettingsController@passwordUpdate')->name('settings.password.update');
});

// Todo routes
Route::prefix('todo')->group(function () {
    Route::get('/', 'TodoController@index')->name('admin.todo.index');
    Route::get('create', 'TodoController@create')->name('admin.todo.create');
    Route::post('store', 'TodoController@store')->name('admin.todo.store');
    Route::get('{id}/edit', 'TodoController@edit')->name('admin.todo.edit');
    Route::post('{id}/update', 'TodoController@update')->name('admin.todo.update');
    Route::get('{id}/destroy', 'TodoController@destroy')->name('admin.todo.destroy');
    Route::get('{id}/toggle', 'TodoController@toggle')->name('admin.todo.toggle');
    Route::get('search', 'TodoController@search')->name('admin.todo.search');
    Route::get('filter', 'TodoController@filter')->name('admin.todo.filter');
});


