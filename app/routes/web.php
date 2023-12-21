<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Models\Medicine;

Route::get('/', function () {
    $medicines = Medicine::all();
    return view('dashboard', ['medicines' => $medicines]);
})->name("dashboard");


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('dashboard');
// })->name("dashboard");
=======
Route::get('/', function () {
    return view('login');
})->name("login");

Route::post('/', [UserController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

>>>>>>> 505babf2ccb5dea8209b0be90a7572dd8218f141

Route::post('/', [UserController::class, 'dashboard']);