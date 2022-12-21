<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Purshasedbook;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $topRated = Rating::
        join('books', 'books.id', '=', 'ratings.book_id')
        // ->where('books.id', 'ratings.book_id')
        ->select('book_id', 'books.name', 'books.img', 'books.author', 'books.price', DB::raw('AVG(rate)'))
        ->groupBy('book_id', 'books.name', 'books.img', 'books.author', 'books.price')
        ->orderBy('AVG(rate)','DESC')
        ->take(10)
        ->get();

        $checkLogin = 0;
        if(Auth::id()){
            $checkLogin = 1 ;
            $user = User::find(Auth::id());
            // return $user->carts;
            $carts = $user->carts->all();
            $count = $user->carts->count();
            $user_id = Auth::id();
            $cartCount = Cart::where('user_id', "$user_id")->count();
            $user = Auth::user();
        }
        else {
            $user = 1;
            $carts = 1;
            $count = 1;
            $user_id = 1;
            $cartCount = 1;
        }
        $mostPurshased = Purshasedbook::orderBy('count', 'DESC')->take(10)->get();
        // return $mostPurshased;
        $best = [];
        foreach ($mostPurshased as $most) {
            $book = Book::find($most->book_id);
            $rating = Rating::where('book_id', $most->book_id)->avg('rate');
            // $rating = number_format($rating);
            $boook = $book->purshased;
            $boook[0]['price'] = $rating;
            $best[] = $boook;
        }
        // return $best;
        // return $mostPurshased;

        // return $user;
        $categories = Category::take(10)->get();
        // return $categories;
        $latest = Book::orderBy('id', 'desc')->take(16)->get();
        return view('home', compact('latest', 'user', 'cartCount', 'categories', 'best', 'topRated', 'carts', 'count', 'checkLogin'));
    }
}
