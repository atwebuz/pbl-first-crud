<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Mercedes Benz',
            'paragraph' => 'xolati alo',
            'image' => null,
            'price' => 1000,
            'rating' => 3,
            'color' => 'red',
        ]);
        Post::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Bmw',
            'paragraph' => 'Xolati alo',
            'image' => null,
            'price' => 1200,
            'rating' => 4,
            'color' => 'qora',
        ]);

        Post::factory(10)->create();

    }
}
