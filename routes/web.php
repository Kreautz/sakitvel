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
	echo "Masup";
    //return view('welcome');
});

	//method uri controller func
Route::get('hello', 'HelloController@index')
	->name('hello.index');
