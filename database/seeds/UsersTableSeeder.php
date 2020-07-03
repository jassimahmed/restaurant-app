<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'fname' => 'Ron',
            'lname' => 'Rodrigues',
            'email' => 'ron@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => $faker->dateTimeThisMonth,
            'created_at' => $faker->dateTimeThisMonth,
        ]);
        DB::table('users')->insert([
            'fname' => 'Harry',
            'lname' => 'Rodrigues',
            'email' => 'harry@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => $faker->dateTimeThisMonth,
            'created_at' => $faker->dateTimeThisMonth,
        ]);
        foreach(range(3, 20) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}
