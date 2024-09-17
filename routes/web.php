<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Lead\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/check-user', [AuthController::class, 'checkUser'])->name('auth.check.user');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // lead management route
    Route::get('/lead-list', [LeadController::class, 'index'])->name('admin.lead.index');

    // customer route
    Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});