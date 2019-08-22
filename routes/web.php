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
    return view('home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');

Route::get('/category', 'HomeController@category')->name('category');
Route::get('/prescription', 'HomeController@prescription')->name('prescription');
Route::get('/nonprescription', 'HomeController@nonprescription')->name('nonprescription');


Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::post('/contact-us', 'ContactusController@storeCustomerContact')->name('contact-us');

Route::get('/cart/{id}', 'HomeController@cart')->name('cart');

Route::get('/sproduct/{id}', 'HomeController@sproduct')->name('singleproduct');




Route::get('/uploadprescription', 'HomeController@uploadprescription')->name('uploadprescription');




Route::get('/customerregister', 'HomeController@customerregister')->name('customerregister');
Route::post('/customer-register', 'RegisterController@store')->name('customer-register');



Route::get('/customerlogin', 'HomeController@customerlogin')->name('customerlogin');
Route::post('/customerlogin', 'CustomerLoginController@login')->name('customer-login');
Route::post('/customerlogout', 'CustomerLoginController@logout')->name('customer-logout');

Route::post('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/checkout/getdetail/{product_id}/{quantity}', 'CheckOutController@getCheckoutForm')->name('get.checkout');
Route::post('/productcheckout', 'CheckOutController@storeCustomerOrder')->name('store.checkout');

Route::get('/search/medicine','HomeController@searchMedicine')->name('search.medicine');
Route::get('/search','HomeController@search')->name('search');



