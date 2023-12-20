<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class authController extends Controller
{
    public function login(Request $request){
        $loginData = $request->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        if(!auth()->attempt($loginData)){
            return response()->json([
                "status"=>false,
                "message"=> "email/Password salah"
            ]);
        }

        $token = auth()->user()->createToken("auth_token");

        return response()->json([
            "status"=>true,
            "message"=>"Login Berhasil",
            "access_token"=>$token
        ]);
    }

    public function register(Request $request){
        $registerData = $request->validate([
            "name"=> "required",
            "nim"=> "required",
            "prodi"=> "required",
            "email"=> "required|email",
            "password"=> "required",
        ]);

        $user = new User([
            "name" => $request->name,
            "nim" => $request->nim,
            "prodi" => $request->prodi,
            "email" => $request->email,
            "password" => $request->password
        ]);

        $user->save();

        return response()->json([
            "status"=>true,
            "message"=>"Register Berhasil",
            "data"=>$user,
        ]);
    }
}
