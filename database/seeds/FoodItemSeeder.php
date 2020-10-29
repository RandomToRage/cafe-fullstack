<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'midnight oil',
            'description' => 'persian imported hybrid beans, great for espresso or cold brews.',
            'image_url' => 'https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp',
            'price' => 3.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Red Eye',
            'description' => 'persian imported hybrid beans, great for espresso or cold brews.',
            'image_url' => 'https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp',
            'price' => 3.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Morning Buzz',
            'description' => 'persian imported hybrid beans, great for espresso or cold brews.',
            'image_url' => 'https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp',
            'price' => 3.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
