<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


// Route::get('/', [ServiceController::class, 'bookService']);
// Route::post('/service',     [ServiceController::class, 'push'])->name('service');

Route::get('/register', [ServiceController::class, 'registrationPage']);

Route::post('/registration', [ServiceController::class, 'register'])->name('register');