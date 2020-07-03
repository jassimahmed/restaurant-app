<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'title' => 'Employee'
        ]);
        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);
        DB::table('role_user')->insert([
            'role_id' => '2',
            'user_id' => '2',
        ]);
        $faker = Faker::create();
        foreach(range(3, 20) as $index){
            DB::table('role_user')->insert([
                'role_id' => rand(1, 2),
                'user_id' => $index,
            ]);
        }
    }
}
