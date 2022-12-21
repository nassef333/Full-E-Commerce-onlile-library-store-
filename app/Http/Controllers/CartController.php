<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Purshasedbook;
use App\Models\Stuckorder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($id){
        $user_id = Auth::id();
        $cartCheck = Cart::where('user_id', $user_id)->where('book_id', $id)->first();
        if($cartCheck) {
            $count = $cartCheck->count+1;
            $cartCheck->update(['count' => $count]);
            return redirect()->back();
        }
        else {
        $cart = new Cart;
        // $cart->user_id = Auth::id();
        $cart->user_id = $user_id;
        $cart->book_id = $id;
        $cart->save();
        return redirect()->back();
        }
    }

    public function removeOne($book_id)
    {
        $user_id = Auth::id();
        $cartCheck = Cart::where('user_id', $user_id)->where('book_id', $book_id)->first();
        if ($cartCheck->count == 1) {
            Cart::where('user_id',$user_id)->where('book_id', $book_id)->delete();
            return redirect()->back();
        }
        $count = $cartCheck->count-1;
        $cartCheck->update(['count' => $count]);
        return redirect()->back();
    }

    public function deleteCart($book_id){ 
        $user_id = Auth::id();
        Cart::where('user_id',$user_id)->where('book_id', $book_id)->delete();
        return redirect()->back();
    }

    public function userCarts()
    {
        $user = User::find(Auth::id());
        $carts = $user->carts->all();
        $count = $user->carts->count();
        // return Cart::find(10);
        $carts = $user->carts->all();
        $count = $user->carts->count();
        // return $carts;
        return view('cart', compact('carts', 'user', 'count', 'carts', 'count'));

    }


    public function placeOrder(){    //cart >> placeOrder() >> stuckOrders
        $user_id = Auth::id();
        $data = User::find(Auth::id())->carts->all();
        // return $data;
        foreach ($data as $row){
            // return $row;
            $check = Purshasedbook::where('book_id', $row->pivot->book_id)->first();
            if ($check) {
                $count = $check->count+$row->pivot->count;
                $check->count = $count;
                $check->save();
            } else {
                $order = new Purshasedbook();
                $order->user_id = Auth::id();
                $order->book_id = $row->pivot->book_id;
                $order->count = $row->pivot->count;
                $order->save();
            }            
            
            $check2 = Stuckorder::where('book_id', $row->pivot->book_id)->first();
            if ($check2) {
            } else {
                $order2 = new Stuckorder();
                $order2->user_id = Auth::id();
                $order2->book_id = $row->pivot->book_id;
                $order2->count = $row->pivot->count;
                $order2->save();
            }

            
            Cart::where('user_id', $user_id)->delete();
            return redirect('/');
        }
        return redirect('/');
    }
}
