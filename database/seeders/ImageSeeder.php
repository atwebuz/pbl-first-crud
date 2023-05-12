<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Images::create([
            'post_id' => 1,
            'images' => 'jentra.png'
        ]);
        Images::create([
            'post_id' => 1,
            'images' => 'jentra1.png'
        ]);

        Images::create([
            'post_id' => 2,
            'images' => 'jiguli.png'
        ]);
        Images::create([
            'post_id' => 2,
            'images' => 'jiguli1.png'
        ]);
        
        Images::create([
            'post_id' => 3,
            'images' => 'malibu1.png'
        ]);

        Images::create([
            'post_id' => 3,
            'images' => 'malibu.png'
        ]);

        Images::create([
            'post_id' => 4,
            'images' => 'isuzu.png'
        ]);

        Images::create([
            'post_id' => 4,
            'images' => 'isuzu1.png'
        ]);

        Images::create([
            'post_id' => 5,
            'images' => 'gazel.png'
        ]);

        Images::create([
            'post_id' => 5,
            'images' => 'gazel1.png'
        ]);

        Images::create([
            'post_id' => 6,
            'images' => 'kamaz.png'
        ]);

        Images::create([
            'post_id' => 7,
            'images' => 'ducasu.png'
        ]);
        Images::create([
            'post_id' => 7,
            'images' => 'ducasu1.png'
        ]);
        }
}
