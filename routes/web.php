<?php
$BASE_URL = config('app')['base_url'];

// FOR AUTH STUFF, USE OUTGOING EMAIL: SECURITY@ROMANSORIN.COM
// FOR SUPPORT, USE OUTGOING EMAIL: SUPPORT@ROMANSORIN.COM
// Eventually, change the dashboard route of all password / email related things to something different (i.e., not /password/reset or /email/verify). For now, it's functional
// dashboard
///////////////////
// Public Routes //
///////////////////
Route::domain('dashboard.' . $BASE_URL)->group(function () {
    Auth::routes(['verify' => true]);
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/users', 'UsersController');
    // Make controllers for all of these. Show different views based on user status
    Route::get('/subscriptions', function () {
        return view('auth.test');
    })->middleware('admin');
    Route::get('/invoices', function () {
        return view('auth.invoices');
    });
    Route::get('/customers', function () {
        return view('auth.customers');
    });
    Route::get('/payments', function () {
        return view('auth.payments');
    });
    Route::get('/users', function () {
        return view('auth.users');
    });
});

// portfolio
///////////////////
// Public Routes //
///////////////////
Route::domain($BASE_URL)->group(function () {
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
