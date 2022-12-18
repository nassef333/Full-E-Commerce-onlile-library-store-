<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($id)
    {
        // $user_id = Auth::id();
        $user_id = Auth::id();
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        $cartCoutnt = Cart::where('user_id', "$user_id")->count();
        $cate = Category::find($id);
        $category = $cate->books;
        $topRated = Rating::
        join('books', 'books.id', '=', 'ratings.book_id')
        // ->where('books.id', 'ratings.book_id')
        ->select('book_id', 'books.name', 'books.img', 'books.author', 'books.price', DB::raw('AVG(rate)'))
        ->groupBy('book_id', 'books.name', 'books.img', 'books.author', 'books.price')
        ->orderBy('AVG(rate)','DESC')
        ->take(10)
        ->get();
        return view('category', compact('cate', 'category', 'topRated', 'cartCoutnt', 'user_id', 'carts', 'count', 'user'));
    }

    public function allCategories()
    {
        $user = User::find(Auth::id());
        $categories = Category::get();
        return view('admin-category', compact('categories', 'user'));
    }

    public function addCategory()
    {
        $user = User::find(Auth::id());
        return view('admin-add-category', compact('user'));
    }

    public function storeCategory(Request $request){
        // return $request;
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->img = $request->file('img')->store('category', 'public');
        $category->save();
        return redirect('admin-category');
    }

    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function editCategory($id)
    {
        $user = User::find(Auth::id());
        $category = Category::find($id);
        return view('admin-edit-category', compact('category', 'user'));
    }
    public function updateCategory(Request $request)
    {
        // return $request;
        $category = Category::find($request->route('id'));
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $request->img
        ]);
        return redirect('admin-category');
    }



}
