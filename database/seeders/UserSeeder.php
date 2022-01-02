<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert([
                'name'      => 'User_' . Str::random(5),
                'email'     => Str::random(10) . '@gmail.com',
                'password'  => Hash::make('123456789'),
            ]);
        }
    }
}
