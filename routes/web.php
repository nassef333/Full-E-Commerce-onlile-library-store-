<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestsController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Models\User;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::post('/add-rating', [RatingController::class, 'add']);
    Route::get('/book/{id}', [BookController::class, 'book']);
    Route::get('/category/{id}', [CategoryController::class, 'category']);
    Route::get('/all', [BookController::class, 'all']);
    Route::get('/addToCart/{id}', [CartController::class, 'addToCart']);
    Route::get('/removeOne/{id}', [CartController::class, 'removeOne']);
    Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart']);
    Route::get('placeOrder', [CartController::class, 'placeOrder']);
    Route::get('/cart', [CartController::class, 'userCarts']);
    Route::get('/stuckorders', [WishlistController::class, 'stuckorders']);
    Route::get('/addToPurshaseBooks', [CartController::class, 'placeOrder']);
    Route::get('/wishlist', [WishlistController::class, 'wishlist']);
    Route::get('/addTowishlist/{id}', [WishlistController::class, 'addToWishlist']);
    Route::get('/deleteWish/{id}', [WishlistController::class, 'deleteWish']);
    Route::get('/addToInterests/{id}', [InterestsController::class, 'addToInterests']);
    Route::post('/addRate', [RatingController::class, 'addRate']);
    Route::get('/checkout/{id}', [InterestsController::class, 'addToInterests']);
});


Route::get('logout', [UserController::class, 'logout']);

Route::group(["middleware" => "guest"], function () {
    Route::get('register', [UserController::class, 'register']);
    Route::Post('storeuser', [UserController::class, 'storeUser']);
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::Post('logincheck', [UserController::class, 'logincheck']);
});

Route::group(['middleware' => 'admin'], function () {
//admin
    Route::get('/admin-dashboard', [Dashboard::class, 'dashboard']);
//admin category
    Route::get('/admin-category', [CategoryController::class, 'allCategories']);
    Route::get('/admin-add-category', [CategoryController::class, 'addCategory']);
    Route::post('/storeCategory', [CategoryController::class, 'storeCategory']);
    Route::get('/deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);
    Route::get('/editCategory/{id}', [CategoryController::class, 'editCategory']);
    Route::post('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);

//admin book
    Route::get('/admin-books', [BookController::class, 'allBooks']);
    Route::get('/admin-add-book', [BookController::class, 'addBook']);
    Route::post('/storeBook', [BookController::class, 'storeBook']);
    Route::get('/deleteBook/{id}', [BookController::class, 'deleteBook']);
    Route::get('/editBook/{id}', [BookController::class, 'editBook']);
    Route::post('/updateBook/{id}', [BookController::class, 'updateBook']);
});







