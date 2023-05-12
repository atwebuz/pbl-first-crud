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
        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'title' => 'Mercedes Benz',
        //     'paragraph' => 'xolati alo',
        //     'image' => null,
        //     'price' => 1000,
        //     'rating' => 3,
        //     'color' => 'red',
        // ]);
        // Post::create([
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'title' => 'Bmw',
        //     'paragraph' => 'Xolati alo',
        //     'image' => null,
        //     'price' => 1200,
        //     'rating' => 4,
        //     'color' => 'qora',
        // ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Gentra',
            'paragraph' => 'chap eshikda pitno bor tez yursa blinmidi ',
            'price' => 16400,
            'rating' => 3,
            'color' => 'kulrang',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Post::create([
            'user_id' => 2,
            'category_id' => 3,
            'title' => 'Jiguli',
            'paragraph' => 'Xolati alo ideal gap bo`lishi mumkinmas ogan odam mazza qladi',
            'price' => 3400,
            'rating' => 4,
            'color' => 'oq',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 3,
            'title' => 'Malibu',
            'paragraph' => 'Moshina shkalad xadavoy korvorish kere',
            'price' => 32000,
            'rating' => 5,
            'color' => 'qora',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Isuzu',
            'paragraph' => 'Yuk moshina bartavoy gaz balon bor',
            'price' => 56000,
            'rating' => 7,
            'color' => 'oq',
            'created_at' => now(),
            'updated_at' => now()
        ]);
  
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Gazel',
            'paragraph' => 'Gazel bartavoy 2 tonnagacha oladi',
            'price' => 19000,
            'rating' => 9,
            'color' => 'oq',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Kamaz',
            'paragraph' => '10 tonnagacha yuk oladi dizel moshinaga jovob',
            'price' => 49000,
            'rating' => 14,
            'color' => 'yashil',
            'created_at' => now(),
            'updated_at' => now()
        ]);
  
        Post::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Motosikl',
            'paragraph' => 'Dukasu Respublikasida yagona rang va asl plastmassada. O`z-o`zidan o`ralgan signalizatsiya tizimi o`rnatildi, mototsikl to`liq ovoz o`tkazmaydigan, LED lampalar o`rnatildi, malibu shoxi, haqiqiy yurgan yili 4600 km, ishlab chiqarilgan yili 2014 yil, Evropa 5 pog`onali transmissiya, moyi har 1000 kmda o`zgartiriladi, moy iste`mol qilmaydi, yumshoq yugurish moslamasi. O`tkir, tezlashuvchi mototsikl, sozlanishi amortizatorli vilka!Narxi 3000$!Bekorga qo`ng`iroq qilmang, maqbul savdo bor, mobil telefonga qo`ng`iroq qiling yoki telegramda yozing! Variantlar va to`lovlar yo`q! Bu oxirgisi DUCASUning!',
            'price' => 34000,
            'rating' => 23,
            'color' => 'seriy',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Post::factory(10)->create();

    }
}
