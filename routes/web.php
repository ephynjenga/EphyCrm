<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [DealController::class, 'index'])->name('dashboard');
Route::get('/deals/create', [DealController::class, 'create'])->name('deals.create');
Route::post('/deals', [DealController::class, 'store'])->name('deals.store');

Route::get('/dashboard', [AccountController::class, 'index'])->name('dashboard');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');

Route::get('/dashboard', [ContactController::class, 'index'])->name('dashboard');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

require __DIR__.'/auth.php';
