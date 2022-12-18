<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist($id){
        $user_id = Auth::id();
        $cartWish = Wishlist::where('user_id', $user_id)->where('book_id', $id)->first();
        if($cartWish) {
            return redirect()->back();
        }
        else {
        $wish = new Wishlist();
        // $cart->user_id = Auth::id();
        $wish->user_id = $user_id;
        $wish->book_id = $id;
        $wish->save();
        return redirect()->back();
        }
    }

    public function wishlist()
    {
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        // return Cart::find(10);
        $wishs = $user->wishlist->all();
        // return $wishs;
        // $created_at = 
        return view('wishlist', compact('wishs', 'user', 'carts', 'count'));

    }

    public function deleteWish($book_id){ 
        $user_id = Auth::id();
        Wishlist::where('user_id',$user_id)->where('book_id', $book_id)->delete();
        return redirect()->back();
    }
}
