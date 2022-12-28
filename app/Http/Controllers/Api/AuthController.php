<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;
        $user->token = $token;

        return response()
            ->json([
                'success' => true,
                'data' => $user
            ]);
    }

    public function get_user($id)
    {
        $user = User::find($id);
        return response()
            ->json([
                'success' => true,
                'data' => $user
            ]);
    }

    public function logout()
    {
        return [
            'success' => true,
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
