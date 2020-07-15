<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => "The Inn at Verdun",
            'logo_img_url' => '/img/floral.png',
            'address_1' => '4094 rue Wellington, Verdun.',
            'address_2' => '',
            'city' => 'Montreal',
            'province' => 'Quebec',
            'postalcode' => 'H3G 1ML',
            'phone_number' => '514-226-0550',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
