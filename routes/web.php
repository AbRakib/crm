<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/check-user', [AuthController::class, 'checkUser'])->name('auth.check.user');

Route::get('/dashboard', function () {
    return view('home');
})->name('admin.dashboard');

Route::get('/show', function () {
    return view('show');
});