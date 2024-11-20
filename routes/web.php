<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentarController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Route untuk kategori
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    // Route lainnya untuk admin bisa ditambahkan di sini
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('announcements', AnnouncementController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentarController::class);
    Route::post('/commentars/{news_id}', [CommentarController::class, 'store'])->middleware('auth');
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


Route::get('/profile', function () {
    return view('profile');
});
