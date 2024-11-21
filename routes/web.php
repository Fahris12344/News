<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('pages.admin.dashboard');
    Route::get('/category', [AdminController::class, 'category'])->name('pages.admin.category.index');
    Route::get('/category/create', [AdminController::class, 'createCategory'])->name('pages.admin.category.create');
    Route::post('/category', [AdminController::class, 'storeCategory'])->name('pages.admin.category.store');
    Route::get('/category/{id}/edit', [AdminController::class, 'editCategory'])->name('pages.admin.category.edit');
    Route::put('/category/{id}', [AdminController::class, 'updateCategory'])->name('pages.admin.category.update');
    Route::delete('/category/{id}', [AdminController::class, 'destroyCategory'])->name('pages.admin.category.destroy');

    Route::get('/news', [AdminController::class, 'news'])->name('pages.admin.news.index');
    Route::get('/news/create', [AdminController::class, 'createNews'])->name('pages.admin.news.create');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('pages.admin.news.store');
    Route::get('/news/{id}/edit', [AdminController::class, 'editNews'])->name('pages.admin.news.edit');
    Route::put('/news/{id}', [AdminController::class, 'updateNews'])->name('pages.admin.news.update');
    Route::delete('/news/{id}', [AdminController::class, 'destroyNews'])->name('pages.admin.news.destroy');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/profile-school', function () {
    return view('pages.profile.index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('pages.contact.index');
});
// //admin
// Route::get('/admin/dashboard', function () {
//     return view('pages.admin.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'indexManual'])->name('dashboard');
