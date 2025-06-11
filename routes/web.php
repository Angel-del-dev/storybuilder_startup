<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'Create'])->name('home');

require __DIR__.'/guest.php';
require __DIR__.'/auth.php';
