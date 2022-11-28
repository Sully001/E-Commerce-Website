<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $userCredentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($userCredentials)) {
            $request->session()->regenerate();
            //Grabs users name into session
            session(['name' => auth()->user()->name]);
            //Grabs user id
            session(['id' => auth()->user()->id]);
            $basket = Basket::select('quantity')->where('userID', auth()->user()->id)->get();
            $basketCount = 0;
            for($i = 0; $i < count($basket); $i++) {
                $basketCount += $basket[$i]['quantity'];
            }
            session(['basket_count' => $basketCount]);
            Session::save();
            //HERE IDENTIFY IF USER IS AN ADMIN OR NOT
            //Get the value from the Admin column
            $isAdmin = auth()->user()->admin;
            if($isAdmin == "Admin") {
                return redirect()->intended('/admin/dashboard');
            }
            return redirect()->intended('welcome');
        }

        //Error checking
        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Incorrect Login Details. Please try again.');
        }

    }
}
