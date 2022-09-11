<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Events\AdminVerificationEvent;
use App\Http\Requests\AdminAuthRequest;
use App\Http\Requests\AdminEmailVerifyRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class LoginController extends Controller
{
    public function showLoginPage()
    {
        return view('admin.auth.login');
    }

    public function showRegPage()
    {
        return view('admin.auth.register');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'confirmed'],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new AdminVerificationEvent($admin));

        Auth::guard('admin')->login($admin);

        return redirect(RouteServiceProvider::ADMIN_HOME);
    }


    public function authenticate(AdminAuthRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function verifyEmail(AdminEmailVerifyRequest $request)
    {
        // return $request->user('admin');
        if ($request->user('admin')->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME.'?verified=1');
        }

        if ($request->user('admin')->markEmailAsVerified()) {
            // event(new Verified($request->user()));
        }

        return redirect()->intended(RouteServiceProvider::ADMIN_HOME.'?verified=1');
    }

    public function notice()
    {
        if(!is_null(auth('admin')->email_verified_at)){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.notice');
    }

}
