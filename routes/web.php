<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
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

// Route::get('/documents', function () {
//     return view('documents.documents');
// });

// Route::get('/documents', [DocumentController::class, 'index']);
// Route::get('/documents/datatable', [DocumentController::class, 'datatable'])->name('documents.datatable');

// Route::post('/documentsCreate', [DocumentController::class, 'create']);
// Route::get('/documents/create', function () {
//     return view('documents.create');
// });
Route::get('/documents', [DocumentController::class, 'index'])
    ->name('documents.index');

Route::get('/documents/datatable', [DocumentController::class, 'datatable'])
    ->name('documents.datatable');

Route::post('/documents', [DocumentController::class, 'create'])
    ->name('documents.store');

Route::get('/documents/create', function () {
    return view('documents.create');
})->name('documents.create');
