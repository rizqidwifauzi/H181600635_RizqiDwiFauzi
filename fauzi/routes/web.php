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

Route::get('/refresh_captcha', 'Auth\RegisterController@refreshCaptcha')->name('refresh');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/{id}', 'KategoriArtikelController@show')->name('kategori_artikel.show');

Route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/{id}', 'KategoriBeritaController@show')->name('kategori_berita.show');

Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/{id}', 'KategoriGaleriController@show')->name('kategori_galeri.show');

Route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumanController@show')->name('kategori_pengumuman.show');

Route::get('artikel','ArtikelController@index')->name('artikel.index');
Route::get('artikel/{id}', 'ArtikelController@show')->name('artikel.show');

Route::get('berita','BeritaController@index')->name('berita.index');
Route::get('berita/{id}', 'BeritaController@show')->name('berita.show');

Route::get('galeri','GaleriController@index')->name('galeri.index');
Route::get('galeri/{id}', 'GaleriController@show')->name('galeri.show');

Route::get('pengumuman','PengumumanController@index')->name('pengumuman.index');
Route::get('pengumuman/{id}', 'PengumumanController@show')->name('pengumuman.show');


Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');
