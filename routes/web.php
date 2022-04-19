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

Route::get('/juices', 'JuiceController@index')->name('juices.index')->middleware('auth');
Route::get('/juices/create', 'JuiceController@create')->name('juices.create');
route::post('/juices', 'JuiceController@store')->name('juices.store'); 
Route::get('/juices/{id}', 'JuiceController@show')->name('juices.show')->middleware('auth');
Route::delete('/juices/{id}', 'JuiceController@destory')->name('juices.destory')->middleware('auth'); 

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
