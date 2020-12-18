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

Route::get('/tambah/{nilai1}/{nilai2}', function ($n1, $n2) {
    return 'Total dari '.$n1.' + '.$n2.' = '.($n1 + $n2);
});

Route::get('/luas kubus/{nilai1}', function ($n1) {
    return 'Jadi, luas kubus dari '.$n1.' * '.$n1.' = '.($n1 * $n1);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/berita', 'App\Http\Controllers\BeritaController@index')->name('berita.index');

Route::get('/berita/create', [App\Http\Controllers\BeritaController::class,'create'])->name('berita.create');

Route::post('/berita', [App\Http\Controllers\BeritaController::class,'store'])->name('berita.store');

Route::get('/berita/{id}', [App\Http\Controllers\BeritaController::class,'show'])->name('berita.show');
