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
Route::group(['namespase' => 'user'], function () {
    Route::get('/products','FoodHelperController@productIndex')->name('products');
    Route::get('/products/{product}','FoodHelperController@productShow')->name('product');

    Route::get('/dishes','FoodHelperController@dishIndex')->name('dishes');
    Route::get('/dishes/{dish}','FoodHelperController@dishShow')->name('dish');

    Route::get('/rations','FoodHelperController@rationIndex')->name('rations');
    Route::get('/rations/{ration}','FoodHelperController@rationShow')->name('ration');
});




Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
	Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/food', 'FoodController', ['as'=>'admin']);
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
	Route::resource('/dish', 'DishController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::resource('/ration', 'RationController', ['as'=>'admin']);
});


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/ration_constructor', function () {
    return view('ration_constructor');
})->name('ration_constructor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

