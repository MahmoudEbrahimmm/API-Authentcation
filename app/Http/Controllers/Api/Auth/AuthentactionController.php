<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
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
}
