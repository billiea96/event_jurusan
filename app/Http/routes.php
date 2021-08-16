<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/about-us', 'ProfilController@tentangKami');
Route::get('/visi-misi', 'ProfilController@visiMisi');
Route::get('/sambutan', 'ProfilController@sambutan');
Route::resource('feedback', 'FeedbackController');
Route::resource('post', 'PostController');
Route::get('/berita', 'PostController@showBerita');
Route::get('/pengumuman', 'PostController@showPengumuman');
Route::get('/kegiatan', 'PostController@showKegiatan');

Route::get('/laboratorium-keahlian', 'LabController@showAll');
Route::get('/mata-kuliah', 'MatakuliahController@showAll');

Route::group(['middleware' => ['auth']], function()
{
	Route::get('/master-berita', 'PostController@masterBerita');
	Route::get('/master-pengumuman', 'PostController@masterPengumuman');
	Route::get('/master-kegiatan', 'PostController@masterKegiatan');
	Route::get('/master-feedback', 'FeedbackController@showAll');
	Route::resource('mahasiswa', 'MahasiswaController');
	Route::resource('karyawan', 'KaryawanController');
	Route::resource('laboratorium', 'LabController');
	Route::resource('matakuliah','MatakuliahController');
	Route::resource('komentar', 'KomentarController');
	Route::resource('share-hosting', 'SharehostingController');
	Route::get('/validasi-hosting', 'SharehostingController@validasi');
});