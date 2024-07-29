<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req) {
        #validation
        $credentials = $req->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended("dashboard");
        }

        return back()->withErrors(
            ["email" => "ログイン情報が誤っています,もう一度お試しください。"]
        );
    }
}
