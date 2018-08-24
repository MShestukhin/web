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
Auth::routes();

 Route::get('/', function () {
     return view('welcome');
 });
//Auth::routes();
//Route::get('/about', 'StaticController@about');
//Route::post('/about', 'StaticController@getTable');
//Auth::routes();
//Route::get('/', 'StaticController@about');
// Route::get('/', function () {
//     return view('welcome');
// });
