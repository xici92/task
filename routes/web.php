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

Route::post('/add-task', 'HomeController@addTask')->name('addTask');

Route::patch('/edit-task/{id}', 'HomeController@editTask')->name('editTask');

Route::delete('/delete-task/{id}', 'HomeController@deleteTask')->name('deleteTask');
