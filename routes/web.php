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

Route::get('/flashcards', 'FlashcardsController@index');
Route::post('/categories/{category}/flashcard/create', 'FlashcardsController@store');
Route::get('/categories/{category}/flashcard/create', 'FlashcardsController@create');
Route::get('/categories/{category}/flashcard/{flashcard}', 'FlashcardsController@edit');
Route::put('/categories/{category}/flashcard/{flashcard}', 'FlashcardsController@update');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::post('/categories', 'CategoriesController@store');
Route::get('/categories/{category}/study', 'CategoriesController@study');
