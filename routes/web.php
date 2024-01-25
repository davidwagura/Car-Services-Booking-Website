<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/index', [PagesController::class, 'index']);

Route::get('/bookSevice', [PagesController::class, 'bookService']) ->name('bookService');

Route::get('/services', [PagesController::class, 'services']);
