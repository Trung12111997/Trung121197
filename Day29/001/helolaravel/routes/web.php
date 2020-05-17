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
Route::get('/demo1', function () {
    echo "route demo1 laravel";
});
Route::get('/demo2', function () {
    return view('demo2');
});
Route::get('/Demo3', 'Demo3Controller@index');
Route::get('/Demo34', 'Demo34Controller@index');
Route::get('/Demo5', 'Demo5Controller@homepage');
Route::get('/Demo5/intro', 'Demo5Controller@intro');
Route::get('/Demo5/contact', 'Demo5Controller@contact');