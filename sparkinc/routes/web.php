<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// route for the frontend landing page
Route::get('/', [FrontendController::class, 'index'])
    ->name('homepage');

// route for about page
Route::get('/about', [FrontendController::class, 'about'])
    ->name('aboutpage');




// DO NOT TOUCH RIGHT NOW
// ADMIN ROUTES

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
