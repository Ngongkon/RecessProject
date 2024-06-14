<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainController::class,'index']);
Route::get('/about', [mainController::class,'about_us'])->name('about-us');
Route::get('/login', [mainController::class,'login_us'])->name('login-us');
Route::get('/contact', [mainController::class,'contact_us'])->name('contact-us');

