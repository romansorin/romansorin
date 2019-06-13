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
// Route::post('/contact', 'ContactFormController@store');
Route::get('/insights', function () {
    return view('insights.index');
});
Route::get('/works', 'WorkController@index');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
