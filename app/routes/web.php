<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Medicine;


Route::get('/', function () {
    return view('login');
})->name("login");

Route::post('/', [UserController::class, 'login']);


Route::get('/dashboard', function () {
    $medicines = Medicine::all();
    return view('dashboard', compact('medicines'));
})->name("dashboard");

