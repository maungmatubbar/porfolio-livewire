<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'short_description' => $this->faker->sentence,
            'tags'=> $this->faker->sentence,
        ];
    }
}
