<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'category'], function(){
    Route::get('/', 'CategoryController@index')->name('category');
    Route::post('/', 'CategoryController@create')->name('category.create');
    Route::put('/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/{id}', 'CategoryController@delete')->name('category.delete');
});

Route::group(['prefix' => 'product'], function(){
    Route::get('/', 'ProductController@index')->name('product');
    Route::post('/', 'ProductController@create')->name('product.create');
    Route::put('/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/{id}', 'ProductController@delete')->name('product.delete');
});
