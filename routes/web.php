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

Route::get('/', function () {
	return view('welcome');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('Linktree', function () {
    return view('Linktree');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('5026221001', function () {
    return view('5026221001');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam') ;
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


//route CRUD pegawai
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD nilai
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiKuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route CRUD keranjang
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
// Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/keranjangbelanja/update','App\Http\Controllers\KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');
