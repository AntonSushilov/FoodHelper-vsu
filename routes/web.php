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
Route::get('/products','FoodHelperController@productIndex')->name('products');
Route::get('/products/{product}','FoodHelperController@productShow')->name('product');

Route::get('/dishes','FoodHelperController@dishIndex')->name('dishes');
Route::get('/dishes/{dish}','FoodHelperController@dishShow')->name('dish');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
	Route::get('/', 'DashboardController@dashboard')->name('admin.index');
	Route::resource('/category', 'CategoryController', ['as'=>'admin']);
	Route::resource('/dish', 'DishController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/add', function () {
    return view('add');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

