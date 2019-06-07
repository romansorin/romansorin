<?php

// dashboard
///////////////////
// Public Routes //
///////////////////
Route::domain('dashboard.romanserver')->group(function() {
    Auth::routes(['verify' => true]);
    Route::get('/', 'DashboardController@index')->name('dashboard');
});

// portfolio
///////////////////
// Public Routes //
///////////////////
Route::domain('romanserver')->group(function() {

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::post('/contact', 'ContactFormController@store');
Route::get('/insights', function () {
        return view('insights');
});
Route::get('/works', function () {
        return view('works');
});
});

