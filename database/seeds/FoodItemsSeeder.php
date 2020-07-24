<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class FoodItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        foreach (range(1, 100) as $index) {
            DB::table('items')->insert([
                'title' => $faker->foodName(),
                'description' => "{$faker->vegetableName()}, {$faker->fruitName()}, {$faker->meatName()}, {$faker->sauceName()}.",
                'image_url' => '',
                'price' => rand(10, 45),
                'category_id' => rand(1, 6),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
