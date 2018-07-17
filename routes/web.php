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
    return view('main');
});

Route::get('/get-list', 'TaskController@index')->name('task.index');
Route::post('/create-task', 'TaskController@store')->name('task.store');
Route::post('/edit-task', 'TaskController@edit')->name('task.edit');
Route::delete('/delete-task/{id}', 'TaskController@destroy')->name('task.destroy');
