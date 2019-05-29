<?php


///////////////////
// Public Routes //
///////////////////
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/insights', function () {
    return view('insights');
});
Route::get('/works', function () {
    return view('works');
});

Route::post('/contact', 'ContactFormController@store');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
