<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\PortalController;

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

//Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'autenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Admin
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('admin/packages', PackageController::class)->middleware('auth');
Route::resource('admin/kuliner', KulinerController::class)->middleware('auth');
Route::resource('admin/homestays', HomestayController::class)->middleware('auth');
Route::resource('admin/souvenir', SouvenirController::class)->middleware('auth');
Route::resource('admin/gallery', GalleryController::class)->middleware('auth');
Route::resource('admin/testimoni', TestimoniController::class)->middleware('auth');
Route::put('admin/testimoni/{testimoni}', [TestimoniController::class, 'tampil'])->middleware('auth')->name('tampil');
Route::resource('admin/abouts', AboutController::class)->middleware('auth');

// front
Route::get('/', [PortalController::class, 'index'])->name('portal');
Route::post('/about', [PortalController::class, 'store']);
Route::get('/about', [PortalController::class, 'about']);
Route::get('/gallery', [PortalController::class, 'gallery_list']);
Route::get('/kuliner', [PortalController::class, 'kuliner_list']);
Route::get('/paket-wisata', [PortalController::class, 'package_list']);
Route::get('/homestay', [PortalController::class, 'homestay_list']);
Route::get('/souvenir', [PortalController::class, 'souvenir_list']);