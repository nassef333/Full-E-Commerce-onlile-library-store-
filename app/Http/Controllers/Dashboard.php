<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Purshasedbook;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function dashboard()
    {
        $user = User::find(Auth::id());
        $usersCount = User::count();
        $booksCount = Book::count();
        $categoriesCount = Category::count();
        $purshasedBooks = Purshasedbook::select(DB::raw("SUM(count)"))->get();

        $topRatings = Rating::
        join('books', 'books.id', '=', 'ratings.book_id')
        // ->where('books.id', 'ratings.book_id')
        ->select('book_id', 'books.name', 'books.img', 'books.author', 'books.price', DB::raw('AVG(rate)'))
        ->groupBy('book_id', 'books.name', 'books.img', 'books.author', 'books.price')
        ->orderBy('AVG(rate)','DESC')
        ->take(10)
        ->get();

        // return $topRatings;

        $mostPurshased = Purshasedbook::orderBy('count', 'DESC')->take(10)->get();
        $bestSeller = [];
        foreach ($mostPurshased as $most) {
            $book = Book::find($most->book_id);
            $rating = Rating::where('book_id', $most->book_id)->avg('rate');
            $boook = $book->purshased;
            $boook[0]['price'] = $rating;
            $bestSeller[] = $boook;
            // return $bestSeller;
        }

        return view('admin-dashboard', compact('user', 'usersCount', 'booksCount', 'categoriesCount', 'purshasedBooks', 'topRatings', 'bestSeller'));
    }
}
