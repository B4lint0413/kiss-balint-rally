<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request){
        if(Auth::attempt($request->validated())){
            $token = request()->user()->createToken("auth_token")->plainTextToken;
            return response()->json([
                "data" => [
                    "token" => $token
                ]
            ]);
        }else{
            return response()->json([
                "data" => [
                    "message" => "Sikertelen belépés."
                ]
            ]);
        }
    }
}
