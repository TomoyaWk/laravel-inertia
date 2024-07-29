<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// home　記事一覧
Route::get('/', function () {
    $art = new Article();
    $articles = $art->all()->load("author")->sortBy("created_at");
    return Inertia::render('index', [
        "articles" => $articles
    ]);
})->name("home");

#　個別記事ページ
Route::get("/posts/{article:id}", function(Article $article) {
    return Inertia::render("show", ["article" => $article]);
})->name("article.show");


// 管理側ログイン
Route::get("/login", function(){return Inertia::render("login");});
Route::post("/login", [AuthController::class, "login"])->name("login");

// dashboard
Route::get("/dashboard", [AdminController::class, "index"])->name("dashboard")->middleware("auth");
//  記事管理ページ list
// Route::get("/dashboard/article", [AdminController::class, "artcle"])->name("artcles")->middleware("auth");
//  create
//  delete
//  update

//  user一覧
// Route::get("/dashboard/users", [AdminController::class, "users"])->name("users")->middleware("auth");
// detail
// update
// delete
