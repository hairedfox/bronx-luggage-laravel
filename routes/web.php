<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\CarriersController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrdersController;
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
Route::get('add-to-cart/{id}', [CartsController::class, 'addToCart']);
Route::patch('update-cart', [CartsController::class, 'update'])->name('update-cart');
Route::delete('remove-from-cart', [CartsController::class, 'remove'])->name('remove-from-cart');
Route::get('shopping-cart', [CartsController::class, 'show'])->name('shopping-cart');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/users/new', [UsersController::class, 'new'])->name('register');
Route::post('/users', [UsersController::class, 'create']);

Route::get('/checkout', [OrdersController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [OrdersController::class, 'placeOrder'])->name('place-order');
Route::get('/thank-you', [OrdersController::class, 'thank'])->name('thank-you');

Route::get('/admin/login', [Admin\AuthController::class, 'new'])->name('admin-login');
Route::post('/admin/login', [Admin\AuthController::class, 'login']);
Route::post('/admin/logout', [Admin\AuthController::class, 'logout'])->name('admin-logout');
Route::get('/admin/dashboard', [Admin\DashboardController::class, 'index'])->name('admin-dashboard');

Route::get('/admin/orders', [Admin\OrdersController::class, 'index'])->name('orders');
Route::post('/admin/orders/{id}/move-state', [Admin\OrdersController::class, 'moveState']);

Route::get('/admin/carriers', [Admin\CarriersController::class, 'index'])->name('admin-carriers');
Route::get('/admin/carriers/new', [Admin\CarriersController::class, 'new'])->name('admin-carriers-new');
Route::post('/admin/carriers', [Admin\CarriersController::class, 'create']);

Route::get('/admin/customers', [Admin\CustomersController::class, 'index'])->name('customers');

Route::get('/admin', function () {
  if (!auth()->check()) {
    return redirect()->intended('/admin/login')->with('alert-danger', 'Permission denied. Please login.');
  }

  return redirect()->intended('/admin/dashboard');
});
