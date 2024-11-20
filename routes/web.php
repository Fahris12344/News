<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{BeritaController, KategoriController, PengumumanController, KomentarController};
use App\Http\Controllers\User\{HomeController, KomentarController as UserKomentarController};
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Halaman khusus admin
    })->name('admin.dashboard');

    // Route untuk Admin mengelola berita, kategori, pengumuman, dan komentar
    Route::resource('/berita', BeritaController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/pengumuman', PengumumanController::class);
    Route::resource('/komentar', KomentarController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk User membaca berita dan memberikan komentar
    Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');
    Route::post('/berita/{id}/komentar', [UserKomentarController::class, 'store'])->name('komentar.store');
});

require __DIR__ . '/auth.php';
