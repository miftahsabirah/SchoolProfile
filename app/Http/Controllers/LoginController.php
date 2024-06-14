<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $Login = User::all();
        return response()->json($Login);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();



        
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::WithMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken('user login')->plainTextToken;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        // Buat pengguna baru
        $user = User::create($request->all());

        if ($user) {
            return response()->json([
                'Message: ' => 'Succes!',
                'user created: ' => $user
            ], 200);
        } else {
            return response([
                'Message: ' => 'We could not create a new user.',
            ], 500);
        }
    }
}
