<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Middleware\IsAdmin;

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Halaman khusus admin
    })->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index'); // Menampilkan daftar berita
    Route::get('/create', [NewsController::class, 'create'])->name('news.create'); // Form tambah berita
    Route::post('/', [NewsController::class, 'store'])->name('news.store'); // Proses simpan berita
    Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit'); // Form edit berita
    Route::put('/{id}', [NewsController::class, 'update'])->name('news.update'); // Proses update berita
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy'); // Proses hapus berita
});

});

require __DIR__.'/auth.php';


