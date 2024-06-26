<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//author in andim dashboard
Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
    Route::resource('/users', UserListController::class)->names('users');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
