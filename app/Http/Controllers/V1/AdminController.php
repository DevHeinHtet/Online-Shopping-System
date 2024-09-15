<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5',
        ]);

        $creds = array('email' => $request->email, 'password' =>$request->password);
        if(Auth::guard('admin')->attempt($creds)){
            return redirect()->route('products');  
        }
        return redirect()->back();
    }

    function logout(){
        $admin = Auth::user();
        Auth::guard('admin')->logout();
        $response = [
            'status' => true
        ];
        return redirect()->route('login');
    }
}
