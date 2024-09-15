<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5',
        ]);

        $response = [
            'status' => false,
        ];

        $creds = array('email' => $request->email, 'password' =>$request->password);
        if(Auth::guard('admin')->attempt($creds)){
            $admin = Auth::guard('admin')->user();
            $admin->tokens()->delete();
            $token = $admin->createToken('admin')->plainTextToken;
            $response = [
                'status' => true,
                'token' => $token,
                'data' => $admin,
            ];
            return response()->json($response, 200);
        }
        return response()->json($response, 500);
    }

    function logout(){
        $admin = Auth::user();
        $admin->currentAccessToken()->delete();
        Auth::guard('admin')->logout();
        $response = [
            'status' => true
        ];
        return response()->json($response,200);
    }
}
