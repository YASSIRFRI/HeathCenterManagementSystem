<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $credentials=array(
            'email'=>$request->email,
            'password'=>$request->password
        );
        var_dump($credentials);
        Log::info('Login Attempt - Email: ' . $credentials['email'] . ', Password: ' . $credentials['password']."Encrypted Password: " . Hash::make($credentials['password']));
        $hashed='$2y$10$zsGlIG/1MeGqimKQZZkcNek7cd/VueeI5qdExbPCWevNSsLTA8h32';
        if (Hash::check($credentials['password'], $hashed)) {
            Log::info('Login Successful - Email: ' . $credentials['email'] . ', Password: ' . $credentials['password']);
        }
        if (Auth::attempt($credentials)) {
            Log::info('Login Successful - Email: ' . $credentials['email'] . ', Password: ' . $credentials['password']);
            return redirect()->route('dashboard');
        }
        return "Failure";
    }


}
