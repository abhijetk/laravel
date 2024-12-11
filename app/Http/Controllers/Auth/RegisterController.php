<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Import the User model correctly
use Illuminate\Support\Facades\Hash; // Import Hash correctly
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Import Redirect correctly

class RegisterController extends Controller
{
    public function create()
    {
        return view('admin-panel.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role=2;
        $user->save();
        return Redirect::route('admin.login');
    }
}