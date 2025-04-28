<?php

Route::group(['namespace' => 'Web'], function() {
    Route::get('localization/{locale}', function($locale) {
        if (array_key_exists($locale, \Illuminate\Support\Facades\Config::get('languages'))) {
            \Illuminate\Support\Facades\Session::put('applocale', $locale);
        }
        return redirect(url()->previous());
    })->name('locale');

    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/o-nama', 'HomeController@about')->name('about');
    Route::get('/smoothie', 'HomeController@smoothie')->name('smoothie');
    Route::get('/products', 'HomeController@products')->name('products');
    Route::get('/news', 'HomeController@news')->name('news');
    Route::get('/gallery', 'HomeController@gallery')->name('gallery');
    Route::get('/cooperation', 'HomeController@cooperation')->name('cooperation');
    Route::get('/goji-red', 'HomeController@gojiRed')->name('goji.red');
    Route::get('/crni-godzi-black-goji', 'HomeController@gojiBlack')->name('goji.black');
    Route::get('/planting', 'HomeController@planting')->name('planting');
    Route::get('/cultivation', 'HomeController@cultivation')->name('cultivation');
    Route::get('/recipes', 'HomeController@recipes')->name('recipes');
    Route::get('/video', 'HomeController@video')->name('video');
    Route::get('/products/seedling/1', 'HomeController@productsSeedling1')->name('products.seedling.1');
    Route::get('/products/seedling/2', 'HomeController@productsSeedling2')->name('products.seedling.2');
    Route::get('/products/seedling/3', 'HomeController@productsSeedling3')->name('products.seedling.3');
    Route::get('/products/berry/1', 'HomeController@productsBerry1')->name('products.berry.1');
    Route::get('/products/berry/2', 'HomeController@productsBerry2')->name('products.berry.2');
    Route::get('/products/jam', 'HomeController@productsJam')->name('products.jam');
    Route::get('/products/sweet', 'HomeController@productsSweet')->name('products.sweet');
});

Route::group(['prefix' => 'bo', 'namespace' => 'Bo'], function() {
    // Routes before login.
    Route::middleware('redirect-if-authenticated')->group(function() {
        // Authentication Routes...
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login.submit');
    });

    // Logout route.
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Routes if you are logged in.
    Route::group(['middleware' => 'back-office-middleware'], function() {
        Route::get('news', 'NewsController@index')->name('news.index');
        Route::get('news/create', 'NewsController@create')->name('news.create');
        Route::post('news', 'NewsController@store')->name('news.store');
        Route::get('news/{id}', 'NewsController@edit')->name('news.edit');
        Route::post('news/{id}', 'NewsController@update')->name('news.update');
        Route::delete('news/{id}', 'NewsController@delete')->name('news.delete');
    });
});