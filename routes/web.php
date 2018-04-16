<?php

// Pages --
Route::get('/', 'PagesController@home');
Route::get('/tipidkor', 'PagesController@tipidkor');
Route::get('/tipidkor/zona-integritas', 'PagesController@zonaIntegritas');
// -- End Pages

// Auth --
Route::get('/login', ['as' => 'login', 'uses' => 'AdminPagesController@login']); // login page
Route::post('/login', 'UsersController@auth'); // login action
Route::get('/logout', 'UsersController@logout'); // logout
// -- End Auth

// Email --
Route::post('/kirim-email', 'EmailController@kirim'); // Kirim Email ke dashboard
// -- End Email

// Dashboard --
Route::group(['middleware' => 'auth'], function(){
  // Pages Admin --
  Route::get('/admin', 'AdminPagesController@dashboard');
  Route::get('/admin/berita', 'AdminPagesController@berita');
  // -- End Pages Admin

  // CRUD USERS --
  Route::get('/admin/users', 'AdminPagesController@users');
  Route::post('/admin/users/tambah-user', 'UsersController@createUser');
  Route::get('/admin/users/hapus-user/{id}', 'UsersController@deleteUser');
  Route::get('/admin/users/edit-user/{id}', 'UsersController@editUser');
  Route::post('/admin/users/update-user/{id}', 'UsersController@updateUser');
  // END CRUD USERS --

  // CRUD BERITA --
  Route::get('/admin/berita/tambah-berita', 'AdminPagesController@tambahBerita');
  Route::post('/admin/berita/tambah-berita', 'BeritaController@createBerita');
  Route::get('/admin/berita/edit-berita/{id}', 'BeritaController@editBerita');
  Route::get('/admin/berita/hapus-berita/{id}', 'BeritaController@deleteBerita');
  Route::post('/admin/berita/update-berita/{id}', 'BeritaController@updateBerita');
  // -- End CRUD 
});
// -- End Dashboard
