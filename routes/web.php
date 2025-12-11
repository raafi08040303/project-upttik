<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// Homepage root
Route::get('/', function () {
    return view('home'); 
});

// Homepage /home
Route::get('/home', function () {
    return view('home'); 
});

// Login
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| ROLE-BASED ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return "Halo Admin!";
})->middleware(['auth', 'role:admin']);

Route::get('/staff', function () {
    return "Halo Staff!";
})->middleware(['auth', 'role:staff']);

Route::get('/user', function () {
    return "Halo User!";
})->middleware(['auth', 'role:user']);

// Homepage root
Route::get('/', function () {
    return view('home'); 
});

// Halaman Profil
Route::get('/profil', function () {
    return view('profile'); 
});

// Halaman layanan
Route::get('/layanan', function () {
    return view('layanan');
});