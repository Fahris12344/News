<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentarController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('pages.admin.dashboard');
    // Route manual untuk kategori berita
    Route::resource('category', CategoryController::class);
    Route::resource('news', NewsController::class);
    Route::resource('announcement', AnnouncementController::class);
    Route::resource('commentar', CommentarController::class);
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/profile-school', function () {
    return view('profile');
});

Route::get('/news', function () {
    return view('news');
});

// //admin
// Route::get('/admin/dashboard', function () {
//     return view('pages.admin.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'indexManual'])->name('dashboard');
