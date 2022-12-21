<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Stuckorder;
use App\Models\User;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function book($id)
    {
        $book_id = $id;
        $similar = Book::find($id)->Category->books->take(10)->all();
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        // $topRated = DB::table('ratings')
        // ->join('books', 'books.id', '=', 'ratings.book_id')
        // ->where('books.id', 'ratings.book_id')
        // ->select('book_id', 'books.name', 'books.img', 'books.author', 'books.price', DB::raw('AVG(rate) as avg_rating'))
        // ->groupBy('book_id')
        // ->orderBy('AVG(rate)','DESC')
        // ->take(10)
        // ->get();

        // return $user->id;
        $download = Stuckorder::where('book_id', $book_id)->where('user_id', $user->id)->first();
        $bookPrice = Book::where('id', $book_id)->get();
        // return ;
        if ($download === null) {
            $download = 0;
            if ($bookPrice[0]['price'] == 0) {
                // return "yes";
                $download = 1;
            }
        }
        $topRated = Rating::
            join('books', 'books.id', '=', 'ratings.book_id')
            // ->where('books.id', 'ratings.book_id')
            ->select('book_id', 'books.name', 'books.img', 'books.author', 'books.price', DB::raw('AVG(rate)'))
            ->groupBy('book_id', 'books.name', 'books.img', 'books.author', 'books.price')
            ->orderBy('AVG(rate)','DESC')
            ->take(10)
            ->get();

            
        // $topRated['rating'] = Rating::where('book_id', $topRated->)->avg('rate');
        $rating = Rating::where('book_id', $id)->avg('rate');
        $rating = number_format($rating);
        $ratingcnt = Rating::where('book_id', $id)->count('rate');    
        $book = Book::find($id);
        return view('book-page', compact('book', 'rating', 'ratingcnt', 'similar', 'topRated', 'user', 'carts', 'count', 'download'));
    }


    public function allBooks()
    {
        $books = Book::get();
        $user = User::find(Auth::id());
        return view('admin-books', compact('books', 'user'));
    }

    public function addBook()
    {
        $user = User::find(Auth::id());
        $categories = Category::get();
        return view('admin-add-book', compact('categories', 'user'));
    }

    public function storeBook(Request $request){

        // return $request;
        $book = new Book;
        $book->name = $request->name;
        $book->category_id = $request->category_id;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->noPages = $request->noPages;
        $book->description = $request->description;
        // $book->img = $request->img;
        $book->img = $request->file('img')->store('user', 'public');
        $book->cdn = $request->file('cdn')->store('pdf', 'public');

        $book->save();
        return redirect('admin-books');
    }

    public function deleteBook($id)
    {
        Book::find($id)->delete();
        return redirect()->back();
    }

    public function editBook($id)
    {
        $user = User::find(Auth::id());
        $categories = Category::get();
        $book = Book::find($id);
        return view('admin-edit-book', compact('book', 'categories', 'user'));
    }

    public function updateBook(Request $request)
    {
        // return $request;
        $book = Book::find($request->route('id'));
        $book->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'price' => $request->price,
            'noPages' => $request->noPages,
            'description' => $request->description
        ]);
        return redirect('admin-books');
    }

    public function searchBooks()
    {        
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        $books = Book::get();
        return view('search-books', compact('books', 'user', 'carts', 'count'));
    }

    public function compare()
    {
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        $books = Book::get();
        return view('compare', compact('user', 'carts', 'count', 'books'));
    }
    public function compareRequest(Request $request)
    {
        // return $request;
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        $books = Book::get();
        $book1 = Book::find($request->firstBook);
        $book2 = Book::find($request->secondBook);
        $category1 = $book1->category->name;
        $category2 = $book2->category->name;
        // return $category1;
        return view('compare', compact('user', 'carts', 'count', 'books', 'book1', 'book2', 'books', 'category1', 'category2'));
    }
}
