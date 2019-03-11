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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('roles', 'RolesController');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('customers', 'CustomersController');
    Route::resource('orders', 'OrdersController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('categories', 'CategoriesController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('products', 'ProductsController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('admins', 'AdminsController');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::resource('tests', 'TestsController');
});

Route::get('/homepage', 'HomePageController@index')->name('homepage');
