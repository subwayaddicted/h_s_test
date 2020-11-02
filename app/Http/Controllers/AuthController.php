<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class AuthController
 *
 * @group Authentication management
 *
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * Create user
     *
     * @bodyParam name string The name of the user.
     * @bodyParam email string An email of the user.
     * @bodyParam password string The password of the user.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse [string] message
     */
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @bodyParam name string An email of the user.
     * @bodyParam password string The password of the user.
     * @bodyParam remember_me boolean Remember me token. Example: false
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse [string] access_token
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('user_token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ], 200);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @authenticated
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse [string] message
     */
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }

    /**
     * Get the authenticated User info
     *
     * @authenticated
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
