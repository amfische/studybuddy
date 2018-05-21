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
Route::post('/flashcards', 'FlashcardsController@store');
Route::get('/flashcards/create', 'FlashcardsController@create');
Route::get('/flashcards/{id}/edit', 'FlashcardsController@edit');
Route::put('/flashcards/{id}/update', 'FlashcardsController@update');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::post('/categories', 'CategoriesController@store');
