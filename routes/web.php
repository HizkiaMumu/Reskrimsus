<?php

// Pages --
Route::get('/', 'PagesController@home');
Route::get('/tipidkor', 'PagesController@tipidkor');
// -- End Pages

// Auth --
Route::get('/login', ['as' => 'login', 'uses' => 'AdminPagesController@login']); // login page
Route::post('/login', 'UsersController@auth'); // login action
Route::get('/logout', 'UsersController@logout'); // logout
// -- End Auth

// Dashboard --
Route::group(['middleware' => 'auth'], function(){
  Route::get('/admin', 'AdminPagesController@dashboard');
  Route::get('/admin/berita', 'AdminPagesController@berita');
  Route::get('/admin/berita/tambah-berita', 'AdminPagesController@tambahBerita');
});
// -- End Dashboard
