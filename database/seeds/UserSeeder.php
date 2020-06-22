<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'Mohammad@gmal.com',
            'password' => bcrypt('Aa123456@'),
            'first_name' => 'Mohammad',
            'second_name' => 'khaled',
            'family_name' => 'Al-tamimi',
            'created_at' => now()
        ]);
    }
}
