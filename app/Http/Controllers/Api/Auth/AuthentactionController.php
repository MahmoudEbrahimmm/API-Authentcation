<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentactionController extends Controller
{
    public function register(RegisterRequest $request){
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'user created successfuly',
            'data' => [
                'user'=>UserResource::make($user)
            ]
        ], 201);
    }
    public function login(LoginRequest $request){
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password , $user->password)){
            return response()->json([
                'status' => 'error',
                'message' => 'The providred credentails are incorrect!'
            ], 401);
        }

        $token = $user->createToken('auth-token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'message' => 'Logged in successfully',
            'data' => [
                'user' => UserResource::make($user),
                'token' => $token
            ]
        ]);
    }
    
    public function profile(){
        return response()->json([
            'status' => 'success',
            'message' => 'welcome to profile page',
            'data' => [
                'user' => UserResource::make(Auth::user()),
            ]
        ]);
    }

}
