<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $Login = User::all();
        return response()->json($Login);
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        dd($user);
    }
}
