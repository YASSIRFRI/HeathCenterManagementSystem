<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


// Login Route
Route::get('/', function () {
    return view('login');
})->name("login");

Route::post('/', [UserController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
