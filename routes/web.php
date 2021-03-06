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

Route::get('/', 'PageController@home')->name('index');
Route::post('/success', 'GuestController@insert');

Route::get('/view', 'GuestController@get');
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/edit', 'PageController@edit');
    Route::get('/admin/view', 'GuestController@getAdminView');
    Route::get('/admin/edit/{id}', 'GuestController@updateView');
    Route::post('/admin/edit/{id}', 'GuestController@update');
    Route::post('/admin/delete/{id}', 'GuestController@delete');
});
Route::get('/login', 'PageController@login');
Route::get('/register', 'PageController@register');
Route::get('/success', 'PageController@success');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
