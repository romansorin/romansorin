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
    if (env('APP_ENV') == 'production')
        return view('errors.inprogress');
    else
        return view('insights');
});
Route::get('/works', function () {
    if (env('APP_ENV') == 'production')
        return view('errors.inprogress');
    else
        return view('works');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
