<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'espresso',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => 'https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'coffee',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => '/img/black-coffee.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'beans',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => '/img/coffee_bags.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        //the tea
        DB::table('food_categories')->insert([
            'title' => 'tea',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => '/img/the-tea.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        //good eats
        DB::table('food_categories')->insert([
            'title' => 'food',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => '/img/good-eats.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'candy',
            'description' => 'ut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.',
            'image_url' => '/img/candy.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
