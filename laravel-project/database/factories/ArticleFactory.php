<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    public function definition(){
        return [
            'title' => $this->faker->sentence(6),
            'excerpt' => $this->faker->paragraph(5),
            'body' => $this->faker->paragraph(10),
        ];
    }
}
