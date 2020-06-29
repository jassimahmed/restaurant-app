<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MembersSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Ram',
            'lname' => 'Rodrigues',
            'email' => 'ron@gmail.com',
            'phone_number' => '43892122',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
