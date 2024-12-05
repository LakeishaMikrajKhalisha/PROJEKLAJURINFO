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
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LupaPasswordController;
use App\Http\Controllers\Auth\UbahPasswordController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/category/{category}', function () {
    return view('category');
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

Route::get('/profil', function () {
    return view('user_login.profilUtamaLogin');
})->middleware(['auth', 'verified'])->name('profil');

Route::get('/hapus-akun', function () {
    return view('hapus-akun');
})->middleware(['auth', 'verified'])->name('hapus-akun');

Route::get('/bantuan', function () {
    return view('bantuan');
})->middleware(['auth', 'verified'])->name('bantuan');

// Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('pengaturan', function () {
        return view('admin.pengaturan');
    })->name('admin.pengaturan');
    Route::get('artikel')->name('admin.artikel');
    Route::get('akun')->name('admin.akun');
    Route::get('bantuan')->name('admin.bantuan');
});

// Author
Route::middleware('auth')->prefix('author')->group(function () {
    Route::get('pengaturan', function () {
        return view('author.data-profil');
    })->name('data-profil');
    // Route::get('artikel')->name('artikel');
    Route::get('artikel/tambah', [ArticleController::class, 'create'])->name('artikel.tambah');
    Route::post('artikel', [ArticleController::class, 'store'])->name('artikel.store');
    Route::get('notifikasi')->name('notifikasi');
});

Route::middleware('auth')->post('/upload-image', [ArticleController::class, 'uploadImage'])->name('artikel.upload-image');

// Route::get('/artikel/tambah', [userLogin::class, 'add'])->middleware('auth');

Route::get('/dashboard', [dashboard::class, 'index']);
Route::get('/kategori', [kategori::class, 'index']);
Route::get('/penelusuran', [penelusuran::class, 'index'])->name('penelusuran.index');
Route::get('/daftar-artikel', [artikel::class, 'index']);
Route::get('/profil-utama', [profilUtama::class, 'index']);
Route::get('/daftar-artikel/publish', [userLogin::class, 'index'])->name('publish.index');
Route::get('/daftar-artikel/draft', [userLogin::class, 'index2'])->name('draft.index2');
Route::get('/artikel/{id}', [post::class, 'show'])->name('artikel.show');
Route::post('/buat-artikel', [userLogin::class, 'create']);
Route::get('/artikel/{id}/edit', [userLogin::class, 'edit']);
Route::patch('/artikel/{id}/update', [userLogin::class, 'update']);
Route::get('/artikel-draft/{id}/hapus', [userLogin::class, 'delete']);
Route::get('/artikel-publish/{id}/hapus', [userLogin::class, 'delete2']);
Route::get('/penelusuran/{id}', [penelusuran::class, 'show']);
// Route::get('/profil-utama/login', [profilUtama::class, 'index2']);
