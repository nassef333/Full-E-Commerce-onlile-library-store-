<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestsController extends Controller
{
    public function addToInterests($id){
        $user_id = Auth::id();



        $interesting = Interest::where('user_id', $user_id)->where('category_id', $id)->first();
        if($interesting) {
            return redirect()->back();
        }
        else {
        $interest = new Interest();
        // $cart->user_id = Auth::id();
        $interest->user_id = $user_id;
        $interest->category_id = $id;
        $interest->save();
        return redirect()->back();
        }
    }
}
