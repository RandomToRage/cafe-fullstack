<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Devin',
            'lname' => 'Davis',
            'email' => 'Devin1@gmail.com',
            'phone_number' => '2813308004',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
