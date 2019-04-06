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

Route::group(array('namespace' => 'Auth', 'prefix' => 'customers', 'as' => 'customers.'), function() {
    Route::get('/login', 'CustomerLoginController@showLoginForm')->name('login');
    Route::post('/login', 'CustomerLoginController@login')->name('login.post');
    Route::post('/logout', 'CustomerLoginController@logout')->name('logout');
});

Route::group(array('namespace' => 'Auth', 'prefix' => 'admins', 'as' => 'admins.'), function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminLoginController@login')->name('login.post');
    Route::post('/logout', 'AdminLoginController@logout')->name('logout');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('customers', 'CustomersController');
        Route::resource('orders', 'OrdersController');
        Route::resource('suppliers', 'SuppliersController');
        Route::resource('products', 'ProductsController');
        Route::resource('admins', 'AdminsController');
    });
});

Route::get('/homepage', 'HomePageController@index')->name('homepage');
Route::get('/about', 'HomePageController@about')->name('about');
Route::get('/specials', 'HomePageController@specials')->name('specials');
Route::get('/new', 'HomePageController@new')->name('new');
Route::get('/contact', 'HomePageController@contact')->name('contact');

Route::get('/add-to-cart/{id}', 'ShoppingCartController@getAddToCart')->name('carts.addToCart');
Route::get('/shopping-cart', 'ShoppingCartController@getCart')->name('carts.shoppingCart');
Route::get('/remove/{id}', 'ShoppingCartController@getRemoveItem')->name('carts.removeItem');
Route::get('/reduce/{id}', 'ShoppingCartController@getReduceByOne')->name('carts.reduceByOne');
Route::get('/increase/{id}', 'ShoppingCartController@getIncreaseByOne')->name('carts.increaseByOne');
