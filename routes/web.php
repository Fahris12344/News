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


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('pages.admin.dashboard');
    Route::resource('kategori', CategoryController::class);
    Route::get('/news', [AdminController::class, 'news'])->name('pages.admin.news.index');
    Route::get('/news/create', [AdminController::class, 'createNews'])->name('pages.admin.news.create');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('pages.admin.news.store');
    Route::get('/news/{id}/edit', [AdminController::class, 'editNews'])->name('pages.admin.news.edit');
    Route::get('/news/{id}/show', [AdminController::class, 'showNews'])->name('pages.admin.news.show');
    Route::put('/news/{id}', [AdminController::class, 'updateNews'])->name('pages.admin.news.update');
    Route::delete('/news/{id}', [AdminController::class, 'destroyNews'])->name('pages.admin.news.destroy');
    
    Route::get('/announcement', [AnnouncementController::class, 'announcement'])->name('pages.announcement.announcement.index');
    Route::get('/announcement/create', [AnnouncementController::class, 'createAnnouncement'])->name('pages.announcement.announcement.create');
    Route::post('/announcement', [AnnouncementController::class, 'storeAnnouncement'])->name('pages.announcement.announcement.store');
    Route::get('/announcement/{id}/edit', [AnnouncementController::class, 'editAnnouncement'])->name('pages.announcement.announcement.edit');
    Route::get('/announcement/{id}/show', [AnnouncementController::class, 'showAnnouncement'])->name('pages.announcement.announcement.show');
    Route::put('/announcement/{id}', [AnnouncementController::class, 'updateAnnouncement'])->name('pages.announcement.announcement.update');
    Route::delete('/announcement/{id}', [AnnouncementController::class, 'destroyAnnouncement'])->name('pages.admin.announcement.destroy');

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

});Route::get('/alumni', function () {
    return view('pages.alumni.index');
});
// //admin
// Route::get('/admin/dashboard', function () {
//     return view('pages.admin.dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'indexManual'])->name('dashboard');
