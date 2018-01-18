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

//admin routes

Route::get('/admin', function() {
    return view('admin.index');
});

Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/posts', 'AdminPostsController');
//Route::get('admin/users', 'AdminUsersController@index')->name('admin.users.index');
//Route::get('admin/users/create', 'AdminUsersController@create')->name('admin.users.create');
//Route::get('admin/users/edit', 'AdminUsersController@edit')->name('admin.users.edit');

Route::post('admin/users/create', 'AdminUsersController@store')->name('users.store');


