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

// User Management Routes
Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::get('/users/{post}', 'UserController@show');
Route::put('/users/{post}', 'UserController@update');
Route::delete('/users/{post}', 'UserController@destroy');

// Customer Type Routes
Route::get('/customer-type', 'CustomerTypeController@index');
Route::post('/customer-type', 'CustomerTypeController@store');
Route::get('/customer-type/{category}/delete', 'CustomerTypeController@destroy');

// Product Category Routes
Route::get('/product-categories', 'ProductCategoryController@index');
Route::post('/product-categories', 'ProductCategoryController@store');
Route::get('/product-categories/{category}/delete', 'ProductCategoryController@destroy');

// Product Routes
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/{category}/delete', 'ProductController@destroy');

// Products Prices Routes
Route::get('/product-prices', 'ProductPricesController@index');
Route::post('/product-prices', 'ProductPricesController@store');
Route::get('/product-prices/{category}/delete', 'ProductPriceControllers@destroy');

// Sales Routes
Route::get('/sales', 'SaleController@index');
Route::get('/credit', 'SaleController@creditSales');
Route::get('/credit/{id}/verify', 'SaleController@verifyCreditSale');

// Make Sale Routes
Route::get('/make-sale', 'MakeSaleController@index');
Route::post('/add-to-cart', 'MakeSaleController@addToCart');
Route::get('/remove-from-cart/{id}', 'MakeSaleController@deleteFromCart');
Route::get('/view-cart', 'MakeSaleController@viewCart');
Route::get('/submit-sale', 'MakeSaleController@store');

Auth::routes();

// Temp Auth Routes
Route::post('/login2', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');

// Route::get('/units', 'UnitController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login2', function () {
    return view('auth/login2');
});

// PagesController Routes
Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/layout', function () {
    return view('layouts/admin');
});

Route::get('/units', function () {
    return view('admin/units');
});