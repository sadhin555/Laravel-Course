<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserCheckController extends Controller
{
    public function index()
    {
        return view('user_check');
    }

    public function checkUser(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if($user){
            return "EXISTS";
        }else{
            return "NOT_EXISTS";
        }
    }
}
