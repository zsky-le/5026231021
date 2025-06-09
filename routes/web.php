<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\pegawaicontroller;
use App\Http\Controllers\blogcontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});



Route::get('blog', function () {
	return view('blog');
});


Route::get('hello', [Link::class, 'helloworld']);

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('linktree2', function () {
	return view('linktree2');
});

Route::get('test', function () {
	return view('test');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('latihanKodeSoal1', function () {
	return view('latihanKodeSoal1');
});


Route::get('dosen', [Link::class, 'index']);
Route::get('/pegawai/{nama}', [pegawaicontroller::class, 'index']);

Route::get('/formulir/', [pegawaicontroller::class, 'formulir']);
Route::post('/formulir/proses', [pegawaicontroller::class, 'proses']);

//route blog
Route::get('/blog', [blogcontroller::class, 'home']);
Route::get('/blog/tentang', [blogcontroller::class, 'tentang']);
Route::get('/blog/kontak', [blogcontroller::class, 'kontak']);

//Crud Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
//Route::get('/pegawai/store', [PegawaiController::class, 'store']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
