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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',"LoginController@index");
Route::post('/login',"LoginController@login");

Route::get('/books',"BookController@index")->name('dashboard');
Route::get('/books/create',"BookController@create");
Route::post('/books',"BookController@store");
Route::delete('/books/{id}',"BookController@destroy");
Route::get('/books/{id}/edit',"BookController@edit");
Route::patch('/books/{id}',"BookController@update");