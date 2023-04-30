<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'category_id' => rand(1,3),
            'title' => fake()->unique()->word(),
            'paragraph' => fake()->paragraph(13),
            'price' => fake()->numberBetween( 1000, 10000),
            'rating' =>  fake()->numberBetween( 10, 100),
            'color' =>  fake()->colorName(),
        ];


    }
}
