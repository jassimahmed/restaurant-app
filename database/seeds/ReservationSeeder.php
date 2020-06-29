<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'fname' => 'Jackie',
            'lname' => 'Jack',
            'email' => 'jack@gmail.com',
            'phone' => '43892122',
            'guests' => '5',
            'time' => '7',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        DB::table('reservations')->insert([
            'fname' => 'Max',
            'lname' => 'Webber',
            'email' => 'max.webber@gmail.com',
            'phone' => '43892122',
            'guests' => '3',
            'time' => '6',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
