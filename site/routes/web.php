<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mapskate', 'MapskateController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('disconnect');


Route::get('/acheter', 'ProductController@index')->name('acheter.index');
Route::get('/inscription', 'ContactController@index')->name('contact.index');

Route::get('/dashboard/product', 'DashboardController@product')->name('dashboard.product');
Route::post('/dashboard/product/delete/{id}', 'DashboardController@productDelete')->name('product.delete');
Route::get('/dashboard/product/add', 'DashboardController@productAdd')->name('product.add');
Route::post('/dashboard/product/create', 'DashboardController@productCreate')->name('product.create');

