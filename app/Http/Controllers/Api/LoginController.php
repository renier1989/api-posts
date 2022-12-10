<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        
        $this->validateLogin($request);
        
        if (Auth::attempt($request->only('email','password'))){
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success'
            ]);
        }

        return response()->json([
            'message' => 'no esta autorizado para acceder'
        ],401);

        // login false
    }
    
    public function validateLogin(Request $request){
        

        $valid = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);
        return $valid;
    }
}
