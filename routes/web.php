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
 Route::get('/students', 'StudentController@getStudent')->name('students.index');


 Route::get('/students/create', 'StudentController@createStudent')->name('students.add');

 Route::post('/students','StudentController@store')->name('students.store');

 Route::delete('/students/{id}','StudentController@destroy')->name('students.destroy');


Route::put('/students/{id}','StudentController@update')->name('students.update');

Route::get('/students/{id}/edit','StudentController@edit')->name('students.edit');