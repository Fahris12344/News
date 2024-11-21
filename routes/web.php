<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('/news/{id}/like', [adminController::class, 'dislikeNews'])->name('news.like');
    Route::post('/news/{id}/dislike', [adminController::class, 'dislikeNews'])->name('news.dislike');
    Route::post('/news/{id}/comment', [adminController::class, 'dislikeNews'])->name('news.comment');

    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('pages.admin.dashboard');
        Route::get('/category', [AdminController::class, 'category'])->name('pages.admin.category.index');
        Route::get('/category/create', [AdminController::class, 'createCategory'])->name('pages.admin.category.create');
        Route::post('/category', [AdminController::class, 'storeCategory'])->name('pages.admin.category.store');
        Route::get('/category/{id}/edit', [AdminController::class, 'editCategory'])->name('pages.admin.category.edit');
        Route::put('/category/{id}', [AdminController::class, 'updateCategory'])->name('pages.admin.category.update');
        Route::delete('/category/{id}', [AdminController::class, 'destroyCategory'])->name('pages.admin.category.destroy');
        // Route::resource('kategori', CategoryController::class);

        Route::get('/news', [AdminController::class, 'news'])->name('pages.admin.news.index');
        Route::get('/news/create', [AdminController::class, 'createNews'])->name('pages.admin.news.create');
        Route::post('/news', [AdminController::class, 'storeNews'])->name('pages.admin.news.store');
        Route::get('/news/{id}/edit', [AdminController::class, 'editNews'])->name('pages.admin.news.edit');
        Route::get('/news/{id}/show', [AdminController::class, 'showNews'])->name('pages.admin.news.show');
        Route::put('/news/{id}', [AdminController::class, 'updateNews'])->name('pages.admin.news.update');
        Route::delete('/news/{id}', [AdminController::class, 'destroyNews'])->name('pages.admin.news.destroy');

        Route::get('/announcement', [AdminController::class, 'announcement'])->name('pages.admin.announcement.index');
        Route::get('/announcement/create', [AdminController::class, 'createAnnouncement'])->name('pages.admin.announcement.create');
        Route::post('/announcement', [AdminController::class, 'storeAnnouncement'])->name('pages.admin.announcement.store');
        Route::get('/announcement/{id}/edit', [AdminController::class, 'editAnnouncement'])->name('pages.admin.announcement.edit');
        Route::get('/announcement/{id}/show', [AdminController::class, 'showAnnouncement'])->name('pages.admin.announcement.show');
        Route::put('/announcement/{id}', [AdminController::class, 'updateAnnouncement'])->name('pages.admin.announcement.update');
        Route::delete('/announcement/{id}', [AdminController::class, 'destroyAnnouncement'])->name('pages.admin.announcement.destroy');
        
    });




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
Route::get('/alumni', function () {
    return view('pages.alumni.index');
});
// //admin
// Route::get('/admin/dashboard', function () {
//     return view('pages.admin.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'indexManual'])->name('dashboard');
Route::get('/dashboard/detail',[ DashboardController::class, 'detail'])->name('dashboard/detail');
