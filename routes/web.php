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

Route::get('/', 'PageController@home');
Route::get('/admin/edit', 'PageController@edit');
Route::get('/view', 'GuestController@get');
Route::get('/admin/view', 'GuestController@getAdminView');
Route::get('/login', 'PageController@login');
Route::get('/register', 'PageController@register');
Route::get('/success', 'PageController@success');
