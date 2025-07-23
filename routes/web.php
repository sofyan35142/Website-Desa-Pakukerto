<?php

use App\Http\Controllers\Admin\AgendaDesa;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\EventController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ProfileDesa;
use App\Http\Controllers\Landing\PersuratanController;
use App\Http\Controllers\Landing\UmkmController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [Home::class,  'homeAdmin'])->name('homeAdmin');

Route::get('/', [HomeController::class,  'home'])->name('home');
Route::get('/blog', [BlogController::class,  'Blog'])->name('Blog');
Route::get('/blog/blogdetail', [BlogController::class,  'blogdetail'])->name('blogdetail');
Route::get('/contact', [ContactController::class,  'ViewContact'])->name('contact');
Route::get('/profile/sejarahdesa', [ProfileDesa::class,  'ViewSejarahDesa'])->name('SejarahDesa');
Route::get('/profile/visimisi', [ProfileDesa::class,  'ViewVisiMisi'])->name('ViewVisiMisi');
Route::get('/profile/kelembagaan', [ProfileDesa::class,  'ViewKelembagaan'])->name('ViewKelembagaan');
Route::get('/profile/kelembagaan/PemerintahDesa', [ProfileDesa::class,  'ViewKelembagaanDetail'])->name('ViewKelembagaanDetail');
Route::get('/profile/letakgeografis', [ProfileDesa::class,  'ViewLetakGeografis'])->name('Viewletakgeografis');
Route::get('/profile/demografi', [ProfileDesa::class,  'ViewDemografi'])->name('Viewdemografi');
Route::get('/profile/potensidesa', [ProfileDesa::class,  'ViewPotensiDesa'])->name('ViewPotensiDesa');
Route::get('/umkm', [UmkmController::class,  'ViewUmkm'])->name('Viewumkm');
Route::get('/umkm/detail', [UmkmController::class,  'ViewDetailUmkm'])->name('ViewUmkm');


Route::get('/persuratan', [PersuratanController::class,  'viewpersuratan'])->name('persuratan');
Route::get('/event', [EventController::class,  'viewevent'])->name('event');
Route::get('/event/eventdetail', [EventController::class,  'vieweventdetail'])->name('event');


//admin
Route::get('/blogviewadmin', [AdminBlogController::class,  'BlogView'])->name('blogviewadmin');
Route::get('/blogform', [AdminBlogController::class,  'BlogForm'])->name('BlogForm');

////////////////adminHOME/////////////////////////////////////////////

////Sambutan Kades//////////////////////////
Route::get('/sambutanKades', [Home::class,  'sambutanKades'])->name('viewsambutanKades');
Route::get('/editsambutan/{id}', [Home::class,  'editsambutan'])->name('editsambutan');
Route::post('/updatesambutan/{id}', [Home::class,  'updatesambutan']);

/////////////Agenda//////////////////////////
Route::get('/AgendaDesa', [AgendaDesa::class,  'AgendaDesa'])->name('viewAgendaDesa');
