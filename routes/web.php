<?php

use App\Http\Controllers\Admin\AgendaDesa;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Admin\Persuratan;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\EventController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ProfileDesa;
use App\Http\Controllers\Landing\PersuratanController;
use App\Http\Controllers\Landing\UmkmController;
use Illuminate\Support\Facades\Route;

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


//////////////////////////////////////////////////admin dari sini/////////////////////////////////////////////////////////////
Route::get('/admin', [Home::class,  'homeAdmin'])->name('homeAdmin');

Route::get('/viewSurat', [Persuratan::class,  'viewSurat'])->name('viewSuratAdmin');
//adminBlog
Route::get('/blogviewadmin', [AdminBlogController::class,  'BlogView'])->name('admin.blogs.view');
Route::get('/blogform', [AdminBlogController::class,  'BlogForm'])->name('admin.blogs.form');
Route::post('/blogpost', [AdminBlogController::class,  'store'])->name('admin.blogs.store');
Route::get('/blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
Route::put('/blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');

//backend surat
Route::post('/submit-skck', [PersuratanController::class,  'submitSkck'])->name('submit.skck');


////////////////adminHOME///////////////////

////Sambutan Kades//////////////////////////
Route::get('/sambutanKades', [Home::class,  'sambutanKades'])->name('viewsambutanKades');
Route::get('/editsambutan/{id}', [Home::class,  'editsambutan'])->name('editsambutan');
Route::post('/updatesambutan/{id}', [Home::class,  'updatesambutan']);
////Total Penduduk//////////////////////////
Route::get('/Penduduk', [Home::class,  'Penduduk'])->name('viewPenduduk');
Route::get('/editpenduduk/{id}', [Home::class,  'editpenduduk'])->name('editpenduduk');
Route::post('/updatependuduk/{id}', [Home::class,  'updatependuduk']);

/////////////Agenda//////////////////////////
Route::get('/Agenda', [AgendaDesa::class,  'AgendaDesa'])->name('viewAgendaDesa');
Route::get('/tambahagendadesa', [AgendaDesa::class,  'tambahagendadesa'])->name('viewtambahagendadesa');
Route::post('/insertkegiatan', [AgendaDesa::class,  'insertkegiatan']);
Route::get('/editagenda/{id}', [AgendaDesa::class,  'editagenda'])->name('editagenda');
Route::post('/updateagenda/{id}', [AgendaDesa::class,  'updateagenda']);
Route::get('/deleteagenda/{id}', [AgendaDesa::class, 'delete'])->name('agendadelete');
/////////////TESTIMONIAL//////////////////////////
Route::get('/testimonial', [Home::class,  'testimonialDesa'])->name('viewtestimonialDesa');
Route::get('/tambahtestimoni', [Home::class,  'tambahtestimoni'])->name('viewtambahtestimoni');
Route::post('/inserttestimoni', [Home::class,  'inserttestimoni']);
Route::get('/edittestimoni/{id}', [Home::class,  'edittestimoni'])->name('edittestimoni');
Route::post('/updatetestimoni/{id}', [Home::class,  'updatetestimoni']);
Route::get('/deletetestimoni/{id}', [Home::class, 'deletetestimoni']);
