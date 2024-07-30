<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class AdminController extends Controller
{
    //dashboard表示
    public function index(Request $req) {
        //　ログインユーザー
        $auth = Auth::user();

        //ユーザーに紐づく記事一覧
        $articles = Article::where("user_id", $auth->id)->orderBy("created_at")->get();

        return Inertia::render(
            "dashboard", ["loginUser" => $auth, "articles" => $articles],
        );
    }
}
