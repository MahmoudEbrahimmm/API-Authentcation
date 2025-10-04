<?php

use App\Http\Controllers\Api\Auth\AuthentactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
    return "TEST API";
});

Route::post('register',[AuthentactionController::class,'register']);
Route::post('login',[AuthentactionController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('profile',[AuthentactionController::class,'profile']);
    Route::post('logout',[AuthentactionController::class,'logout']);
});
