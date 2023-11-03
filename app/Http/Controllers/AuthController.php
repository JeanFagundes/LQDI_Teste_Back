<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Auths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(CreateAuthRequest $request)
{
    $user = Auths::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return $user;
}

public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = Auths::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        return response()->json(['message' => 'Autenticação bem-sucedida']);
    } else {
        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }
}
}
