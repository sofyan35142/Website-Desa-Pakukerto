<?php

use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home'])->name('home');
Route::get('/blog', [BlogController::class,  'Blog'])->name('Blog');
Route::get('/blogdetail', [BlogController::class,  'blogdetail'])->name('blogdetail');
Route::get('/contact', [ContactController::class,  'ViewContact'])->name('contact');
