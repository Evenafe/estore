<?php

/* Admin */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::redirect('/', 'admin/dashboard', 301);

    /* Dashboard */
    Route::get('dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    /* Orders */
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', function () {
            return view('admin.orders.index');
        })->name('orders');
    });

    /* Wares */
    Route::group(['prefix' => 'wares'], function () {

        /* Categories */
        Route::resource('categories', 'CategoryController')
            ->only(['index', 'store', 'show', 'update', 'destroy'])
            ->names(['index' => 'categories']);

        /* Products */
        Route::resource('products', 'ProductController')
            ->only(['store', 'edit', 'destroy', 'update', 'index', 'show'])
            ->names(['index' => 'products']);
    });

    /* Design */
    Route::group(['prefix' => 'design'], function () {
        Route::resource('slider', 'SliderController')
            ->only(['index', 'store', 'show', 'update', 'destroy'])
            ->names(['index' => 'slider']);

        Route::resource('sliderImages', 'SliderImagesController')
            ->only(['store']);
    });

    /* Settings */
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', function () {
            return view('admin.settings.index');
        })->name('settings');
    });
});

/* Auth */
Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
    Route::redirect('/', 'auth/login', 301);

    /* Login */
    Route::resource('login', 'LoginController')
        ->only(['index', 'store'])
        ->names(['index' => 'login']);

    /* Register */
    Route::resource('register', 'RegisterController')
        ->only(['index', 'store'])
        ->names(['index' => 'register']);
});

/* Storefront */
Route::view('/{path?}', 'storefront.index')
    ->where('path', '.*')
    ->name('react');