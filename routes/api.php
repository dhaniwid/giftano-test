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
    Route::post('/{category}', 'CategoryController@create')->name('category.create');
    Route::put('/{id}', 'CategoryController@update')->name('category.update');
    Route::delete('/{id}', 'CategoryController@delete')->name('category.delete');
});

Route::group(['prefix' => 'posts'], function() {
    Route::get('/', 'PostController@index')->name('posts');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::post('/', 'PostController@store')->name('posts.store');
    Route::put('/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/{post}', 'PostController@delete')->name('posts.delete');
});
