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
            'site_title' => '8-bit coffee',
            'logo_image_url' => 'https://i.ya-webdesign.com/images/cup-transparent-espresso-4.webp',
            'address_1' => '3121 hansell st',
            'address_2' => '',
            'city' => 'Fort Worth',
            'state' => 'Texas',
            'zip' => '76133',
            'phone_number' => '817-949-3636',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
