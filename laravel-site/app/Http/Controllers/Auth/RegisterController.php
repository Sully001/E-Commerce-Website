<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed',

        ]);

        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email', 'password'));
        //This takes the users name and adds it to the session variable (Suliman)
        session(['name' => auth()->user()->name]);

        //Set basket to 0
        session(['basket_count' => 0]);
        Session::save();

        return redirect()->route('welcome');
    }
}
