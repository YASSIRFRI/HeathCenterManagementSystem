<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        Log::info('Login Attempt - Email: ' . $credentials['email'] . ', Password: ' . $credentials['password']);
        $credentials["password"]=Hash::make($credentials["password"]);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        return redirect('/')->with('error', 'Oppes! You have entered invalid credentials');
    }


}
