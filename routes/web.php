<?php

use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ProfileDesa;
use App\Http\Controllers\Landing\PersuratanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home'])->name('home');
Route::get('/blog', [BlogController::class,  'Blog'])->name('Blog');
Route::get('/blogdetail', [BlogController::class,  'blogdetail'])->name('blogdetail');
Route::get('/contact', [ContactController::class,  'ViewContact'])->name('contact');
Route::get('/profile/sejarahdesa', [ProfileDesa::class,  'ViewSejarahDesa'])->name('SejarahDesa');
Route::get('/profile/visimisi', [ProfileDesa::class,  'ViewVisiMisi'])->name('ViewVisiMisi');
Route::get('/profile/kelembagaan', [ProfileDesa::class,  'Kelembagaan'])->name('Kelembagaan');
Route::get('/profile/letakgeografis', [ProfileDesa::class,  'LetakGeografis'])->name('letakgeografis');

Route::get('/persuratan', [PersuratanController::class,  'viewpersuratan'])->name('persuratan');
