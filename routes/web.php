<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return "Halo Admin!";
})->middleware(['auth', 'role:admin']);

Route::get('/staff', function () {
    return "Halo Staff!";
})->middleware(['auth', 'role:staff']);

Route::get('/user', function () {
    return "Halo User!";
})->middleware(['auth', 'role:user']);
