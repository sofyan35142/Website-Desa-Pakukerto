<?php

use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,  'home'])->name('home');
