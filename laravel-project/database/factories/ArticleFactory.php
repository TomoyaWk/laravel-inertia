<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    public function definition(){
        return [
            'title' => $this->faker->realText(10),
            'excerpt' => $this->faker->realText(100),
            'body' => $this->faker->realText(500),
            'user_id' => User::factory(),
        ];
    }
}
