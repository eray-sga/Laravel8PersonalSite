<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog', [HomeController::class,'blog'])->name('bloghome');
Route::get('/blogdetay/{slug}', [HomeController::class,'blogDetail'])->name('blogdetail');

Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[HomeController::class,'contactpost'])->name('contactpost');

Route::get('/blogdetay', function () {
    return view('front.blog-detail');
});

Route::prefix('admin')->middleware('isLogin')->group(function() {
    Route::get('login', [AuthController::class,'index'])->name('login');
    Route::post('login', [AuthController::class,'loginPost'])->name('loginpost');
});

Route::prefix('admin')->middleware('isAdmin')->group(function() {
   
    Route::get('/', [AuthController::class,'adminLogin'])->name('adminlogin');
    Route::get('cikis', [AuthController::class,'logout'])->name('logout');
    
    Route::get('hakkimizda', [AboutController::class,'index'])->name('about');
    Route::post('hakkimizda/guncelle', [AboutController::class,'update'])->name('aboutupdate');

    Route::get('hizmetler', [ServiceController::class,'index'])->name('service');
    Route::get('hizmetekle', [ServiceController::class,'add'])->name('serviceadd');
    Route::post('hizmetekle', [ServiceController::class,'store'])->name('servicepost');
    Route::get('hizmetduzenle/{id}', [ServiceController::class,'edit'])->name('serviceedit');
    Route::post('hizmetduzenle', [ServiceController::class,'update'])->name('serviceeditpost');
    Route::get('hizmetsil/{id}', [ServiceController::class,'delete'])->name('servicedelete');

    Route::get('beceriler', [SkillController::class,'index'])->name('skill');
    Route::get('beceriekle', [SkillController::class,'add'])->name('skilladd');
    Route::post('beceriekle', [SkillController::class,'store'])->name('skillpost');
    Route::get('beceriduzenle/{id}', [SkillController::class,'edit'])->name('skilledit');
    Route::post('beceriduzenle', [SkillController::class,'update'])->name('skilleditpost');
    Route::get('becerisil/{id}', [SkillController::class,'delete'])->name('skilldelete');

    Route::get('blog', [BlogController::class,'index'])->name('blog');
    Route::get('blogekle', [BlogController::class,'add'])->name('blogadd');
    Route::post('blogekle', [BlogController::class,'store'])->name('blogpost');
    Route::get('blogduzenle/{id}', [BlogController::class,'edit'])->name('blogedit');
    Route::post('blogduzenle', [BlogController::class,'update'])->name('blogeditpost');
    Route::get('blogsil/{id}', [BlogController::class,'delete'])->name('blogdelete');
});

