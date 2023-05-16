<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
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

Route::get('/carousel', function () {
    return view('pages.carousel');
});
Route::get('/', [PostsController::class, 'index'])->name('pages.index');
Route::get('/search',[PostsController::class, 'search'])->name('search');
Route::get('posts/wishlist', [PagesController::class, 'wishlist'])->name('posts.wishlist');
Route::any('posts/wishlist_add', [WishlistController::class, 'add'])->name('wishlist.add');
Route::any('posts/wishlist_remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
Route::get('posts/checkout', [PagesController::class, 'checkout'])->name('posts.checkout');
// Route::any('posts/settings', [PagesController::class, 'settings'])->name('posts.settings');
Route::any('posts/faq', [PagesController::class, 'faq'])->name('posts.faq');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('throttle:3,1');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'register_store'])->name('register_store');


Route::resource('posts', PostsController::class);
Route::resource('comments', CommentController::class);

// Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
// Route::post('/wishlist/{post}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
// Route::get('/wishlist', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
// Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');



// Route::resources([
//     'posts', PostsController::class,
//     'comments', PostsController::class,
// ]);
    

// Route::get('/', [PostsController::class, 'index']);  
// Route::get('cart', [PostsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [PostsController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [PostsController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [PostsController::class, 'destroy'])->name('remove.from.cart');


