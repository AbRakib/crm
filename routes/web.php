<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/check-user', [AuthController::class, 'checkUser'])->name('auth.check.user');
Route::prefix('/admin', function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');