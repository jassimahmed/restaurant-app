<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjCjsma4afqAhUIWs0KHeweBikQ9zAwJnoECAUQBQ&url=https%3A%2F%2Fwww.facebook.com%2FMcDonalds&usg=AOvVaw3rUdi5pGIQG6m_WVcbMEZM',
            'twitter_url' => 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjCjsma4afqAhUIWs0KHeweBikQ9zAwJnoECAUQAw&url=https%3A%2F%2Ftwitter.com%2FMcDonalds&usg=AOvVaw2J4fec5F3G3yFXQ5dzoSSF',
            'instagram_url' => 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjCjsma4afqAhUIWs0KHeweBikQ9zAwJnoECAUQBw&url=https%3A%2F%2Fwww.instagram.com%2FMcDonalds&usg=AOvVaw3qniIQI89X6H7EuBwDeaYU',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
    }
}
