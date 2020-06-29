<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Some burher stuff in here. lettuce. tomatoee.s water balloons',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'price' => 10.22,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('items')->insert([
            'title' => 'Whopper Burger',
            'description' => 'Some burher stuff in here. lettuce. tomatoee.s water balloons',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'price' => 5.99,
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('items')->insert([
            'title' => 'Five Guys Burger',
            'description' => 'Some burher stuff in here. lettuce. tomatoee.s water balloons',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'price' => 10.22,
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Some burher stuff in here. lettuce. tomatoee.s water balloons',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'price' => 13.99,
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
