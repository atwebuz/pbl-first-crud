<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $tags = [
        ['name' => 'Растаможена'],
        ['name' => 'Электрозеркала'],
        ['name' => 'стеклоподъемники'],
        ['name' => 'Кондиционер'],
        ['name' => 'Охранная'],
        ['name' => 'система'],
        ['name' => 'Парктроник'],
       ];

       Tag::insert($tags);
    }
}
