<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\TrainingController as AdminTrainingController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\SuccessStoryController as AdminSuccessStoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/training-center', [TrainingController::class, 'index'])->name('training.index');
Route::get('/training-center/{training}', [TrainingController::class, 'show'])->name('training.show');
Route::get('/kisah-sukses', [SuccessStoryController::class, 'index'])->name('success.index');
Route::get('/kisah-sukses/{successStory}', [SuccessStoryController::class, 'show'])->name('success.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blogPost}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes - TAMBAHKAN SECARA MANUAL
Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);
    Route::post('logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Admin routes
Route::middleware(['auth', 'App\Http\Middleware\IsAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('programs', ProgramController::class);
    Route::resource('trainings', AdminTrainingController::class);
    Route::resource('blog-posts', BlogPostController::class);
    Route::resource('success-stories', AdminSuccessStoryController::class);
});

//require __DIR__.'/auth.php';//