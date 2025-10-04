<?php

use App\Http\Controllers\Api\Auth\AuthentactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
    return "TEST API";
});

Route::get('profile',[AuthentactionController::class,'profile'])
    ->middleware('auth:sanctum');
Route::post('register',[AuthentactionController::class,'register']);
Route::post('login',[AuthentactionController::class,'login']);
