<?php

use App\Http\Controllers\Api\Auth\AuthentactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test',function(){
    return "TEST API";
});

Route::post('register',[AuthentactionController::class,'register']);