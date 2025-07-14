<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard-user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//user routes
Route::middleware(['auth','userMiddleware'])->group(function(){

    Route::get('dashboard',[UserController::class,'index'])->name('dashboard');
    Route::get('wishlist',[WishlistController::class,'index'])->name('user.favorite');
    Route::get('order',[OrderController::class,'index'])->name('order');
    Route::get('cart',[CartController::class,'index'])->name('user.cart');

});

//admin routes
Route::middleware(['auth','adminMiddleware'])->group(function(){

    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

});
