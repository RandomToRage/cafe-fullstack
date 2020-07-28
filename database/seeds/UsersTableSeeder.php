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
            'fname' => 'Eric',
            'lname' => 'Davis',
            'email' => 'Edavis@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Johson',
            'email' => 'Cindy@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
