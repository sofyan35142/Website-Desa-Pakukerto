<?php

<<<<<<< HEAD
use App\Http\Controllers\Landing\BlogController;
=======
use App\Http\Controllers\Landing\ContactController;
>>>>>>> a40b849bd61050c30d9d5c5670c6994383c78d33
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home'])->name('home');
<<<<<<< HEAD
Route::get('/blog', [BlogController::class,  'Blog'])->name('Blog');
Route::get('/blogdetail', [BlogController::class,  'blogdetail'])->name('blogdetail');
=======
Route::get('/contact', [ContactController::class,  'ViewContact'])->name('contact');
>>>>>>> a40b849bd61050c30d9d5c5670c6994383c78d33
