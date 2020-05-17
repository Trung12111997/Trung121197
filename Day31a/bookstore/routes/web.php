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

/*Route::get('/', function () {
    echo 111; die;
    return view('welcome');
});*/


Route::get('/abc',function () {
    return view('welcome');
});
Route::get('/backend/index', "Backend\BooksController@index")-> name("book_index");
Route::get('/backend/create', "Backend\BooksController@create")->name("book_create");
Route::get('/backend/edit/{id}', "Backend\BooksController@edit");
Route::get('/backend/delete/{id}', "Backend\BooksController@delete");

//xử lý dữ liệu

Route::post('/backend/create', "Backend\BooksController@store");
Route::post('/backend/edit/{id}', "Backend\BooksController@update");
Route::post('/backend/delete/{id}', "Backend\BooksController@destroy");

Route::get('/db/{action?}', 'Backend\Learndbcontroller@index');
