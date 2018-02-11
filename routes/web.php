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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/callendar', 'PagesController@callendar');
Route::get('/orders', 'PagesController@orders');
Route::get('/contacts', 'PagesController@contacts');
// Route for sending mails
Route::post('contacts', 'PagesController@postContacts');
Route::resource('products', 'ProductsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
