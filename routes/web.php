<?php

use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home'])->name('home');
Route::get('/contact', [ContactController::class,  'ViewContact'])->name('contact');
