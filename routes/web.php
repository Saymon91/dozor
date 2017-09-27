<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Web')->group(function () {
    Route::get('/', 'SiteController@index')->name('home');
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/contacts', 'SiteController@contacts')->name('contacts');
    Route::get('/info', 'SiteController@info')->name('info');
});

/*
Route::namespace('Auth')->group(function () {
    Route::get('/register', 'RegisterController@register')->name('register');
    //Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
*/

Route::namespace('Portal')->group(function () {

    Route::domain('portal.localhost')->group(function () {

    });

    Route::domain('account.localhost')->group(function () {
        Route::get('profile', 'UsersController@profile')->name('profile');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@list')->name('users:list');
        Route::get('/{user}', 'UsersController@user')->where(['id' => '[a-z0-9]'])->name('list');
        Route::delete('/{user}', 'UsersController@user')->where(['id' => '[a-z0-9]'])->name('list');
        Route::post('/', 'UsersController@create')->name('create_user');
    });
});

Route::group(['namespace' => 'Wiki', 'domain' => 'wiki.localhost'], function () {
    Route::get('/', 'WikiController@index')->name('wiki:home');
});


Auth::routes();
