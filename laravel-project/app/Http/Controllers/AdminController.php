<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $req) {
        $auth = Auth::user();

        return Inertia::render(
            "dashboard", ["loginUser" => $auth]
        );
    }
}
