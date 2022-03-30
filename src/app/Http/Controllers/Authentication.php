<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username','password');
        if (Auth::attempt($credentials,$request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('admin.login');
        }

        return redirect()->route('admin.login',['loginFailed' => 'نام کاربری و رمز عبور صحیح نمیباشد']);
    }
}
