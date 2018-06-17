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
