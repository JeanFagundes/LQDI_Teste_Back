<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\SendEmail;
use App\Models\Users;

class UserController extends Controller
{
    public function index(){
        return Users::all();
    }
    public function store(CreateUserRequest $req){
        $user = Users::create([
            "name" => $req->name,
            "email" => $req->email,
            "subject" => $req->subject,
            "message" => $req->message,
        ]);

        return $user;
    }

    public function sendEmailUser(SendEmail $request, $id){
        $user = Users::find($id);
        if(!$user) {
            return response()->json(["message" => "User not found"], 404);
        }

        $request->sendEmail($user);

        return response()->json(['message' => 'Email enviado com sucesso'], 200);
    }

}
