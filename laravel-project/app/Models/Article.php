<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ["title", "excerpt", "body", "user_id"];

    public function author() {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}

