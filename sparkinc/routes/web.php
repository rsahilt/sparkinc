<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MessageController;

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


//send message to admin
Route::post('/send-message', [MessageController::class, 'store'])->name('send.message');



// DO NOT TOUCH RIGHT NOW
// ADMIN ROUTES

Auth::routes();

// User profile route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Dashboard Route
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard')->middleware('auth');

// Admin Message List View
Route::get('/admin/messages', [MessageController::class, 'index'])
    ->name('admin.messages')->middleware('auth');;

// to delete the message
Route::delete('/admin/messages/{id}', [MessageController::class, 'destroy'])
     ->name('admin.messages.destroy')->middleware('auth');
