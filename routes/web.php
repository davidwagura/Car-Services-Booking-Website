<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;



Route::get('/', [ServiceController::class, 'registrationPage']);

Route::post('/registration', [ServiceController::class, 'register'])->name('register');

Route::get('/login', [ServiceController::class, 'loginPage']);

Route::post('/login', [ServiceController::class, 'login'])->name('login');

Route::get('/services', [ServiceController::class, 'services']);

Route::post('/service',     [ServiceController::class, 'push'])->name('bookService');
