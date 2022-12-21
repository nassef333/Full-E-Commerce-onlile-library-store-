<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::find(Auth::id());
        $interests = $user->interests;
        $carts = $user->carts->all();
        $count = $user->carts->count();
        // return $interests;
        return view('profile', compact('interests', 'user', 'carts', 'count'));
    }

    public function updateUser(Request $request)
    {
        // return $request;
        // return $request->firstname;
        $formFields = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'username' => 'required|min:5',
            'email' => 'email|required',
            'phone' => 'required'
        ]);

        $user = user::find(Auth::id());
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'username' => $request->username,
            'email' => $request->email
        ]);
        return redirect('profile');
    }
    public function cart()
    {
        $user = User::find(1);
        return $user->purshasedbooks;
    }

    public function register(){
        return view('register');
    }
    public function storeUser(Request $request){
        // dd($request);
        $formFields = $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'username' => 'required|min:5|unique:users',
            'email' => 'email|required|unique:users',
            'phone' => 'required',
            'password' => 'required'
        ]);
        

        if ($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('user', 'public');
        }

        $formFields['password'] = bcrypt($formFields['password']);

        // dd($formFields);
        // $user = new User;
        // $user->firstname = $formFields['firstname'];
        // $user->lastname = $formFields['lastname'];
        // $user->username = $formFields['username'];
        // $user->email = $formFields['email'];
        // $user->password = $formFields['password'];
        // $user->img = $formFields['img'];
        // $user->save();
        $user = User::create($formFields);

        return redirect('login');
    }

    public function login(){
        return view('login');
    }

    public function logincheck(Request $request){
        $formFields = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        
        // dd(Auth());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == 0) {
                return redirect('admin-dashboard');
            }
            return redirect('/');
        }
        return redirect()->back()->withErrors([
            'login' => 'Invalid Login Process.'
        ])->onlyInput('email');
    }
    public function logout(){
        return redirect('login')->with(Auth::logout());
    }
}
