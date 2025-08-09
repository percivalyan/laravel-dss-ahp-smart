<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Redirect ke dashboard kalau sudah login
Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard tunggal untuk semua role
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Admin - User Management
Route::middleware(['auth'])->group(function () {
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    // Profile
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
});
