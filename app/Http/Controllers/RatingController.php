<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;

class RatingController extends Controller
{

    public function addRate(Request $request)
    {
        //$user_id = Auth::id();
        $user_id = Auth::id();

        // echo $user_id;
        // die();

        $rateCheck = Rating::where('user_id', $user_id)->where('book_id', $request->book_id)->first();
        if($rateCheck) {
            $rateCheck->update(['rate' => $request->rate]);
            return redirect()->back();
        }
        else {
            $rating = new Rating;
            $rating->rate = $request->rate;
            $rating->book_id = $request->book_id;
            $rating->user_id = $user_id;
            $rating->save();
            return redirect()->back();
        }
    }

}
