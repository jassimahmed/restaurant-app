<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Ron',
            'lname' => 'Rodrigues',
            'email' => 'ron@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'Harry',
            'lname' => 'Rodrigues',
            'email' => 'harry@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
