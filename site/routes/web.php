<?php

use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Contains;

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


Route::get('/acheter', 'ProductController@index')->name('acheter.product');
Route::get('/acheter/show/{id}', 'ProductController@show')->name('acheter.show');
Route::get('/inscription', 'ContactController@index')->name('contact.index');
Route::get('/Information', 'InformationController@info')->name('Information.index');

Route::get('/dashboard/product', 'DashboardController@product')->name('dashboard.product');
Route::post('/dashboard/product/delete/{id}', 'DashboardController@productDelete')->name('product.delete');
Route::get('/dashboard/product/add', 'DashboardController@productAdd')->name('product.add');
Route::post('/dashboard/product/create', 'DashboardController@productCreate')->name('product.create');

Route::get('/dashboard/mapskate', 'DashboardController@mapskate')->name('dashboard.mapskate');
Route::post('/dashboard/mapskate/delete/{id}', 'DashboardController@mapDelete')->name('map.delete');
Route::get('/dashboard/mapskate/add', 'DashboardController@mapAdd')->name('map.add');
Route::post('/dashboard/mapskate/create', 'DashboardController@mapCreate')->name('map.create');






Route::get('/Contact', 'ContactController@index');
Route::post('/Contact', 'ContactController@store');

