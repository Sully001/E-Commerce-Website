<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    //
    public function userIndex() {
        $users = User::all();
        return view('admin.viewusers', [
            'users' => $users,
        ]);
    }

    public function updatePermission($id) {
        $user = User::findorFail($id);
        $user->admin = request('permissions');
        $user->save();
        Session::flash('permissions', 'Admin permissions changed');
        return redirect()->back();
    }
}
