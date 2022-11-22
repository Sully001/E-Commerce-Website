<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            //HERE IDENTIFY IF USER IS AN ADMIN OR NOT
            //Get the value from the Admin column
            $isAdmin = auth()->user()->admin;
            if($isAdmin == "Admin") {
                return redirect()->intended('/admin/dashboard');
            }
            return redirect()->intended('welcome');
        }

        return back()->withErrors([
            'email' => 'Your E-Mail or password is incorrect. Please try again.',
        ])->onlyInput('email');
    }
}
