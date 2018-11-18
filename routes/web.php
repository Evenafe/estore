<?php

/* Storefront */
Route::get('/', function () {
    return view('storefront.index');
})->name('storefront');

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

    /* Products / categories */
    Route::group(['prefix' => 'wares'], function () {
        Route::resource('categories', 'CategoryController')
            ->only(['index', 'store', 'show'])
            ->names(['index' => 'categories']);

        Route::get('/products', function () {
            return view('admin.wares.products.index');
        })->name('products');
    });

    /* Design */
    Route::group(['prefix' => 'design'], function () {
        Route::get('/', function () {
            return view('admin.design.index');
        })->name('design');
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