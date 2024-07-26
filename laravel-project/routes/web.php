<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Article;
use App\Models\User;

Route::get('/', function () {
    return Inertia::render('index', [
        "articles" => Article::all()->load("author"),
        "test" => User::all()
    ]);
})->name("home");
