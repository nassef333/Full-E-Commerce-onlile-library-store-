<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/ok', function () {
//     $category = Category::find(1);
//     foreach ($category->books as $book) {
//         dd($book);
//     }

    // $book = Book::find(1);
    // dd($book->Category->name);
// });

Route::get('cart', [UserController::class, 'cart']);
Route::post('/add-rating', [RatingController::class, 'add']);
