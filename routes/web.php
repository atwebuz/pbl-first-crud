<?php

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
Route::get('posts/settings', [PagesController::class, 'settings'])->name('posts.settings');
Route::get('posts/faq', [PagesController::class, 'faq'])->name('posts.faq');
Route::get('/register', [PagesController::class, 'register'])->name('register');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::fallback(FallbackController::class);

Route::resource('posts', PostsController::class);
Route::resource('comments', CommentController::class);



// Route::resources([
//     'posts', PostsController::class,
//     'comments', PostsController::class,
// ]);
    
