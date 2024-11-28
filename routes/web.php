<?php


use App\Http\Controllers\post;
use App\Http\Controllers\artikel;
use App\Http\Controllers\comment;
use App\Http\Controllers\kategori;
use App\Http\Controllers\komentar;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\userLogin;
use App\Http\Controllers\penelusuran;
use App\Http\Controllers\profilUtama;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view ('welcome');
});

Route::get('/dashboard', [dashboard::class, 'index']);
Route::get('/kategori', [kategori::class, 'index']);
Route::get('/penelusuran', [penelusuran::class, 'index'])->name('penelusuran.index');
Route::get('/daftar-artikel', [artikel::class, 'index']);
Route::get('/profil-utama', [profilUtama::class, 'index']);
Route::get('/daftar-artikel/publish', [userLogin::class, 'index'])->name('publish.index');
Route::get('/daftar-artikel/draft', [userLogin::class, 'index2'])->name('draft.index2');
Route::get('/artikel/{id}', [post::class, 'show'])->name('artikel.show');
Route::get('/tambah-artikel', [userLogin::class, 'add']);
Route::post('/buat-artikel', [userLogin::class, 'create']);
Route::get('/artikel/{id}/edit', [userLogin::class, 'edit']);
Route::patch('/artikel/{id}/update', [userLogin::class, 'update']);
Route::get('/artikel-draft/{id}/hapus', [userLogin::class, 'delete']);
Route::get('/artikel-publish/{id}/hapus', [userLogin::class, 'delete2']);
Route::get('/penelusuran/{id}', [penelusuran::class, 'show']);
Route::get('/profil-utama/login', [profilUtama::class, 'index2']);
