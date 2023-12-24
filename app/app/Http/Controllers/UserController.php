<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            //var_dump(Auth::user());
            //Log::info('User login successful - Email: ' . $credentials['email']);
            //dd(session()->all());
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            var_dump(Auth::user());
            Log::info('User login failed - Email: ' . $credentials['email']);
            return redirect()->route('login')->with('error', 'Email or password incorrect');
        }
    }
}
