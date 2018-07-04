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

Route::get('/categories', 'CategoriesController@index')->name('allCategories');
Route::get('/categories/{id}', 'CategoriesController@show')->name('showCategory');
Route::post('/categories', 'CategoriesController@store')->name('storeCategory');
Route::get('/categories/{category}/study', 'CategoriesController@study')->name('study');

Route::prefix('/categories/{category}')->group(function() {
	Route::get('flashcard/create', 'FlashcardsController@create')->name('createCard');
	Route::post('flashcard/create', 'FlashcardsController@store')->name('storeCard');
	Route::get('flashcard/{flashcard}', 'FlashcardsController@edit')->name('editCard');
	Route::put('flashcard/{flashcard}', 'FlashcardsController@update')->name('updateCard');
});

Route::get('/testing', 'TestsController@testXSS');
