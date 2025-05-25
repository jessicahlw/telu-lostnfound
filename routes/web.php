<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\FoundItemController;

Route::get('/', [AuthController::class, 'showLogin'])->name('auth.login'); // default ke login
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


// Upload Image
Route::get('/upload', [UploadController::class, 'upload'])->name('upload.form');
// Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);

// Route barang yang ditemukan (jika mau diaktifkan)
// Route::get('/found-items', [FoundItemController::class, 'index'])->name('found.index');
