<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('posts/wishlist', [PagesController::class, 'wishlist'])->name('posts.wishlist');
Route::get('posts/checkout', [PagesController::class, 'checkout'])->name('posts.checkout');
Route::any('posts/settings', [PagesController::class, 'settings'])->name('posts.settings');
Route::any('posts/faq', [PagesController::class, 'faq'])->name('posts.faq');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('throttle:3,1');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_store'])->name('register_store');


Route::resource('posts', PostsController::class);
Route::resource('comments', CommentController::class);



// Route::resources([
//     'posts', PostsController::class,
//     'comments', PostsController::class,
// ]);
    

// Route::get('/', [PostsController::class, 'index']);  
Route::get('cart', [PostsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PostsController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PostsController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PostsController::class, 'remove'])->name('remove.from.cart');