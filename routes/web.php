<?php

// Pages --
Route::get('/', 'PagesController@home');
Route::get('/tipidkor', 'PagesController@tipidkor');
Route::get('/tipidkor/zona-integritas', 'PagesController@zonaIntegritas');
// Tipidkor NEWS Pages
Route::get('/tipidkor/news', 'TipidkorNewsController@home');
Route::get('/tipidkor/news/all', 'TipidkorNewsController@allNews');
Route::get('/tipidkor/news/{id}', 'TipidkorNewsController@readNews');
Route::get('/tipidkor/news/kategori/{kategori}', 'TipidkorNewsController@categoryFilter');
// -- End Pages

// Auth --
Route::get('/login', ['as' => 'login', 'uses' => 'AdminPagesController@login']); // login page
Route::post('/login', 'UsersController@auth'); // login action
Route::get('/logout', 'UsersController@logout'); // logout
// -- End Auth

// Email --
Route::post('/kirim-email', 'EmailController@kirimEmailSupport');
Route::post('/tipidkor/news/subscribe', 'EmailController@kirimEmailSubscribe');
// -- End Email

// Dashboard --
Route::group(['middleware' => 'auth'], function(){
  // Pages Admin --
  Route::get('/admin', 'AdminPagesController@dashboard');
  Route::get('/admin/berita', 'AdminPagesController@berita');
  Route::get('/admin/berita/kategori-berita', 'AdminPagesController@kategori');
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
  // -- END CRUD BERITA

  // CRUD KATEGORI BERITA --
  Route::post('/admin/berita/kategori/tambah-kategori', 'BeritaController@createKategori');
  Route::get('/admin/berita/kategori/hapus-kategori/{id}', 'BeritaController@deleteKategori');
  Route::get('/admin/berita/kategori/edit-kategori/{id}', 'BeritaController@editKategoriDetail');
  Route::post('/admin/berita/kategori/edit-kategori/{id}', 'BeritaController@storeEditKategori');
  // END CRUD KATEGORI --

});
// -- End Dashboard
