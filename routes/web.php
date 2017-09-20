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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/livros', 'LivrosController@store');
Route::get('/livros', 'LivrosController@index');
Route::get('/livros/create', 'LivrosController@create');
Route::get('/livros/{livro}', 'LivrosController@show');
Route::get('/livros/{livro}/edit', 'LivrosController@edit');
Route::patch('/livros/{livro}', 'LivrosController@update');
