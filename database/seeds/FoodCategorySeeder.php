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
        DB::table('categories')->insert([
            'title' => 'starters',
            'description' => 'Food to start your meals.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'title' => 'salad',
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'title' => 'Pizza And Pasta',
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'title' => 'Entrees',
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'title' => 'Brunch',
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'title' => 'Sides',
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image_url' => 'https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
