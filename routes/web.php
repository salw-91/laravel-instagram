<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    // Profile
    Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.show');
    Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    //Post
    Route::get('/posts/create', [PostsController::class, 'create'])->name('post.create');
    Route::post('/posts/store', [PostsController::class, 'store'])->name('post.store');
    Route::get('/posts/show/{post}', [PostsController::class, 'show'])->name('post.show');
});

// Route::post('/contest', [ContestEntryController::class, 'store']);
require __DIR__.'/auth.php';
