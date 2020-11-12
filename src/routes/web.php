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




Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Auth::routes();


Route::get('/', 'MainController@index')->name('main');
Route::get('/home', 'MainController@index')->name('home');
Route::get('/info', 'MainController@info')->name('info');
Route::get('/members', 'MainController@members')->name('members');
Route::get('/administration', 'MainController@administration')->name('administration');
