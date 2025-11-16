<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/admin', function () {
    return "Halo Admin!";
})->middleware(['auth', 'role:admin']);

Route::get('/staff', function () {
    return "Halo Staff!";
})->middleware(['auth', 'role:staff']);

Route::get('/user', function () {
    return "Halo User!";
})->middleware(['auth', 'role:user']);
