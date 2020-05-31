<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/user/{id}', 'UserController@profile');

Route::get('edit/user', 'UserController@edit')->name('user.edit');
Route::post('edit/user', 'UserController@update')->name('user.update');




