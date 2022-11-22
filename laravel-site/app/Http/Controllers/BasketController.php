<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class BasketController extends Controller
{
    //
    public function index($id) {
        $user = User::findorFail($id);
        return view('basket', [
            'user' => $user,
        ]);
    }
}
