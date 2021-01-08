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
            'logo_image_url' => '/img/logo.png',
            'address_1' => '1311 W Magnolia Ave',
            'address_2' => '',
            'city' => 'Fort Worth',
            'state' => 'Texas',
            'zip' => '76104',
            'phone_number' => '817-949-3636',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
