<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;


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
