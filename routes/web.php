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

/*category*/
Route::get('/createcategory', 'BackEnd\Categories@create')->name('createcategory');
Route::post('/storecategory', 'BackEnd\Categories@store')->name('storecategory');
Route::get('/Categories', 'BackEnd\Categories@index')->name('category');
Route::post('category/{id}', 'BackEnd\Categories@update')->name('categories.update');
Route::get('/category/edit/{id}', 'BackEnd\Categories@edit')->name('categories.edit');
Route::get('/category/delete/{id}', 'BackEnd\Categories@destroy')->name('categories.delete');

/*product*/
Route::get('/createproduct', 'BackEnd\Products@create')->name('createproduct');
Route::post('/storeproduct', 'BackEnd\Products@store')->name('storeproduct');
Route::get('/Products', 'BackEnd\Products@index')->name('product');
Route::post('product/{id}', 'BackEnd\Products@update')->name('products.update');
Route::get('/product/edit/{id}', 'BackEnd\Products@edit')->name('products.edit');
Route::get('/product/delete/{id}', 'BackEnd\Products@destroy')->name('products.delete');

/*cartproduct*/
/*sales*/
Route::get('/addproduct', 'website\subadmin\adminproduct@create')->name('addproduct');
Route::post('/adminstoreproduct', 'website\subadmin\adminproduct@store')->name('adminstoreproduct');
Route::get('/adminProducts', 'website\subadmin\adminproduct@index')->name('adminproduct');
Route::post('adminproduct/{id}', 'website\subadmin\adminproduct@update')->name('adminproducts.update');
Route::get('/adminproduct/edit/{id}', 'website\subadmin\adminproduct@edit')->name('adminproducts.edit');
Route::get('/adminproduct/delete/{id}', 'website\subadmin\adminproduct@destroy')->name('adminproducts.delete');
Route::get('/Profile', 'website\UserController@index')->name('profile');

/*sales*/

/*cart*/
/* orderproduct*/
/* order*/
/*user*/

Route::get('export', 'MyController@export')->name('export');

Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services', 'website\ServiceController@index')->name('services');
Route::get('/', 'website\IndexController@index')->name('index');
Route::get('/car/{id}', 'website\ProductController@show')->name('product');
Route::get('/cars', 'website\ProductController@index')->name('products');

Route::get('/part/{id}', 'website\ProductController@showPart')->name('part');
Route::get('/parts', 'website\ProductController@showParts')->name('parts');
