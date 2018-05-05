<?php

// Pages --
Route::get('/', 'PagesController@home');
// Struktur Organisasi Reskrimsus Pages
Route::get('/struktur-organisasi', 'PagesController@strukturOrganisasi');
// Tipidkor Pages
Route::get('/tipidkor', 'PagesController@tipidkor');
Route::get('/tipidkor/htck', 'PagesController@htckTipidkor');
Route::get('/tipidkor/struktur-organisasi', 'PagesController@strukturOrganisasiTipidkor');
// Tipidkor NEWS Pages
Route::get('/tipidkor/news', 'TipidkorNewsController@home');
Route::get('/tipidkor/news/all', 'TipidkorNewsController@allNews');
Route::get('/tipidkor/news/{id}', 'TipidkorNewsController@readNews');
Route::get('/tipidkor/news/kategori/{kategori}', 'TipidkorNewsController@categoryFilter');
// Tipidkor Zona Integritas
Route::get('/tipidkor/zona-integritas', 'PagesController@zonaIntegritas');
Route::get('/tipidkor/zona-integritas/wbs', 'PagesController@detailWbs');
Route::get('/tipidkor/zona-integritas/wbs/lapor', 'PagesController@laporWbs');
Route::get('/tipidkor/zona-integritas/{id}', 'PagesController@detailAprb');
Route::post('/tipidkor/zona-integritas/wbs/tambah-wbs', 'ZiController@tambahWbs');
// -- End Pages

// FILES --
Route::get('/htck/{namafile}', 'HtckController@showHtck');
// END FILES --

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
  Route::get('/admin/berita/tambah-berita', 'AdminPagesController@tambahBerita');
  Route::get('/admin/berita/kategori-berita', 'AdminPagesController@kategori');
  Route::get('/admin/htck', 'AdminPagesController@htck');
  Route::get('/admin/users', 'AdminPagesController@users');
  Route::get('/admin/struktur-organisasi', 'AdminPagesController@strukturOrganisasi');
  // -- End Pages Admin

  // CRUD USERS --
  Route::post('/admin/users/tambah-user', 'UsersController@createUser');
  Route::get('/admin/users/hapus-user/{id}', 'UsersController@deleteUser');
  Route::get('/admin/users/edit-user/{id}', 'UsersController@editUser');
  Route::post('/admin/users/update-user/{id}', 'UsersController@updateUser');
  // END CRUD USERS --

  // CRUD BERITA --
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

  // CRUD HTCK --
  Route::post('/admin/htck/tambah-htck', 'HtckController@uploadHtck');
  Route::get('/admin/htck/lihat-htck/{filename}', 'HtckController@showHtck');
  Route::get('/admin/htck/hapus-htck/{id}', 'HtckController@deleteHtck');
  // END CRUD  HTCK

  // CRUD STRUKTUR ORGANISASI
  Route::post('/admin/struktur-organisasi/tambah-struktur-organisasi', 'StrukturOrganisasiController@createStrukturOrganisasi');
  Route::get('/admin/struktur-organisasi/hapus-struktur-organisasi/{id}', 'StrukturOrganisasiController@deleteStrukturOrganisasi');
  Route::get('/admin/struktur-organisasi/edit-struktur-organisasi/{id}', 'StrukturOrganisasiController@editStrukturOrganisasi');
  Route::post('/admin/struktur-organisasi/update-struktur-organisasi/{id}', 'StrukturOrganisasiController@updateStrukturOrganisasi');
  // END CRUD STRUKTUR ORGANISASI

  // CRUD ZONA INTEGRITAS
  Route::get('/admin/zi', 'AdminPagesController@zi');
  Route::post('/admin/zi/aprb/tambah-aprb', 'ZiController@createAPRB');
  Route::post('/admin/zi/aprb/edit-aprb/{id}', 'ZiController@editAPRB');
  Route::get('/admin/zi/aprb/delete-aprb/{id}', 'ZiController@deleteAPRB');
  Route::get('/admin/zi/aprb/detail-aprb/{id}', 'ZiController@detailAprb');
  Route::get('/admin/zi/wbs/hapus-wbs/{id}', 'ZiController@hapusWbs');
  Route::post('/admin/zi/paparan/tambah-paparan', 'ZiController@tambahPaparan');
  //

});
// -- End Dashboard

// AJAX
Route::get('/admin/struktur-organisasi/ajax/get-struktur-organisasi', 'StrukturOrganisasiController@getStrukturOrganisasi');
Route::get('/admin/struktur-organisasi/ajax/get-struktur-organisasi-tipidkor', 'StrukturOrganisasiController@getStrukturOrganisasiTipidkor');
// -- END AJAX
