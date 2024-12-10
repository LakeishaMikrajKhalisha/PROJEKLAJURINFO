<?php


use App\Http\Controllers\post;
use App\Http\Controllers\artikel;
use App\Http\Controllers\comment;
use App\Http\Controllers\kategori;
use App\Http\Controllers\komentar;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\userLogin;
use App\Http\Controllers\imageProfil;
use App\Http\Controllers\penelusuran;
use App\Http\Controllers\profilUtama;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LupaPasswordController;
use App\Http\Controllers\Auth\UbahPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view ('welcome');
});

Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('register', [RegisterController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('login', [LoginController::class, 'store']);

    Route::get('google', [GoogleAuthController::class, 'redirectToGoogle'])->name('login.google');

    Route::get('google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);

    Route::get('lupa-password', [LupaPasswordController::class, 'create'])
        ->name('password.request');

    Route::post('lupa-password', [LupaPasswordController::class, 'store'])
        ->name('password.email');

    Route::get('ubah-password/{token}', [UbahPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('ubah-password', [UbahPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->post('/auth/logout', [LogoutController::class, 'destroy'])->name('logout');

Route::get('/dashboard', [dashboard::class, 'index']);
Route::get('/kategori/{id}', [kategori::class, 'show'])->name('kategori.show');
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
