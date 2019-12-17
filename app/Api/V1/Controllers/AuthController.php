<?php
/**
 * Created by PhpStorm.
 * User: hemant
 * Date: 23/08/18
 * Time: 6:51 PM
 */

namespace App\Api\V1\Controllers;

use App\Api\V1\Exceptions\InvalidCredentialsException;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;


class AuthController extends BaseController
{

    public function login(Request $request)
    {
        if (!$request->get('email')) {
            return response()->json(["message" => "Email is required"], 422);
        }
        if (!$request->get('password')) {
            return response()->json(["message" => "Password is required"], 422);
        }

        $credentials = $request->only('email', 'password');

        $user = User::whereEmail($request->get('email'))->first();
        if (!$user) {
            throw new InvalidCredentialsException();
        }

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                throw new InvalidCredentialsException();
            }
        } catch (JWTException $e) {
            throw new InvalidCredentialsException();
        }

        return [
            'token' => $token,
            'data' => new UserResource($user)
        ];
    }

    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
    }

    public function passwordHash(Request $request)
    {
        $password = $request->get('password');
        if ($password) {
            return Hash::make($password);
        }
    }
}
