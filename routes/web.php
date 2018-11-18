<?php

/* Storefront */
Route::get('/', function () {
    return view('storefront.index');
});

/* Admin */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::redirect('/', 'admin/dashboard', 301);

    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

/* Auth */
Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function() {
    Route::redirect('/', 'auth/login', 301);

    Route::resource('login', 'LoginController')
        ->only(['index', 'store'])
        ->names(['index' => 'login']);

    Route::resource('register', 'RegisterController')
        ->only(['index', 'store'])
        ->names(['index' => 'register']);
});