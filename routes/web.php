<?php


///////////////////
// Public Routes //
///////////////////
Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::post('/contact', 'ContactFormController@store');
Route::get('/works', function () { return view('works'); });
