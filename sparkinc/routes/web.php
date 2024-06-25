<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

//FRONTEND ROUTES 

// route for the frontend landing page
Route::get('/', [FrontendController::class, 'index'])
    ->name('homepage');

// route for about page
Route::get('/about', [FrontendController::class, 'about'])
    ->name('aboutpage');

// route for contact page
Route::get('/contact', [FrontendController::class, 'contact'])
    ->name('contactpage');

// route for products page
Route::get('/products', [FrontendController::class, 'products'])
    ->name('productpage');

// route for blogs page
Route::get('/blogs', [FrontendController::class, 'blogs'])
    ->name('blogpage');






// DO NOT TOUCH RIGHT NOW
// ADMIN ROUTES

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
