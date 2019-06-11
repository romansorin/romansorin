<?php
$BASE_URL = config('app')['base_url'];

// FOR AUTH STUFF, USE OUTGOING EMAIL: SECURITY@ROMANSORIN.COM
// FOR SUPPORT, USE OUTGOING EMAIL: SUPPORT@ROMANSORIN.COM
// FOR BILLING/PAYMENTS, USE OUTGOING EMAIL: BILLING@ROMANSORIN.COM
// FOR GENERAL, USE OUTGOING EMAIL: HELLO@ROMANSORIN.COM
// Eventually, change the dashboard route of all password / email related things to something different (i.e., not /password/reset or /email/verify). For now, it's functional
// dashboard
///////////////////
// Public Routes //
///////////////////
Route::domain('dashboard.' . $BASE_URL)->group(function () {
    Auth::routes(['verify' => true]);
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/users', 'UsersController');
    Route::resource('/subscriptions', 'SubscriptionsController');
    Route::resource('/invoices', 'InvoicesController');
    Route::resource('/payments', 'PaymentsController');
    Route::resource('/customers', 'CustomersController');
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
    Route::get('/insights', function () {
        return view('insights');
    });
    Route::get('/works', function () {
        return view('works');
    });
});
