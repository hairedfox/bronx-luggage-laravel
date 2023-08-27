<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\CarriersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticPagesController::class, 'homepage'])->name('root');
Route::get('/contact-us', [StaticPagesController::class, 'contact_us'])->name('contact');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/shop', [CarriersController::class, 'index'])->name('shop');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/users/new', [UsersController::class, 'new'])->name('register');
Route::post('/users', [UsersController::class, 'create']);

Route::get('/admin/login', [Admin\AuthController::class, 'new'])->name('admin-login');
Route::post('/admin/login', [Admin\AuthController::class, 'login']);
Route::post('/admin/logout', [Admin\AuthController::class, 'logout'])->name('admin-logout');
Route::get('/admin/dashboard', [Admin\DashboardController::class, 'index'])->name('admin-dashboard');
