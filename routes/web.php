<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/contest', [ContestEntryController::class, 'store']);

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
