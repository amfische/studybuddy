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
Route::get('/flashcards/create', 'FlashcardsController@create');
Route::post('/flashcards', 'FlashcardsController@store');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show');
Route::post('/categories', 'CategoriesController@store');
