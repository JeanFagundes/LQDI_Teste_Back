<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UserController::class, "index"]);
Route::post('users', [UserController::class, "store"]);
Route::post('sendEmail/{id}', [UserController::class, 'sendEmailUser']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
