<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\CarriersController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [StaticPagesController::class, 'homepage']);
Route::get('/contact-us', [StaticPagesController::class, 'contact_us']);

Route::get('/login', [AuthController::class, 'show_login_form'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/bags', [CarriersController::class, 'bags']);
Route::get('/backpacks', [CarriersController::class, 'backpacks']);
Route::get('/luggages', [CarriersController::class, 'luggages']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/users/new', [UsersController::class, 'new']);
Route::post('/users', [UsersController::class, 'create']);
