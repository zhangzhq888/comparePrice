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

//Route::get('/', function () {
//    return view('welcome',['version'=>Illuminate\Foundation\Application::VERSION]);
//});

Route::get('/','Web\HomeController@index');
Route::get('/article','Web\HomeController@index');
Route::get('/test','Web\HomeController@test');
Route::resource('/article','Web\HomeController',['only'=>['show']]);
