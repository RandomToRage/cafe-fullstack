<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "In the coffee shop we are as awkward lovers, pretending to be there of convenience, afraid of our need to connect to one another. This place filled with people always so close and so far apart... this is the community of our era... as close as we can be without admitting the truth.",
            'keywords' => 'coffee, best coffee in texas, best coffee in fort worth',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
