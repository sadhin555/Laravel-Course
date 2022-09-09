<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function register()
    {
        return view('backend.reg');
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function authenticate(Request $request)
    {
        $credentials['email'] = $request->email;
        $credentials['password'] = $request->password;

        if(Auth::attempt($credentials)){
            return redirect()->route('auth.dashboard');
        }else{
            return redirect()->route('auth.login');
        }

    }

    public function store(Request $request)
    {
       $usr =  User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        if($usr){
            return redirect()->route('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
