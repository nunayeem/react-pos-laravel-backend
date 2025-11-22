<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(AuthRequest $request) 
    {
        $user = User::where('email', $request->email)->orWhere('mobile', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Wrong credentials'], 401);
        }

        $token = $user->createToken($user->email)->plainTextToken;


        return response()->json([
            'message' => 'Login success',
            'token' => $token,
            'user' => $user
        ]);
    }
}
