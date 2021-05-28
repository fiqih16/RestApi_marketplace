<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'fiqih',
            'email' => 'fiqih1666@gmail.com',
            'password' => Hash::make('useradmin')
        ]);

        DB::table('users')->insert([
            'name' => 'Pangestu',
            'email' => 'pangestu.sye@gmail.com',
            'password' => Hash::make('useradmin')
        ]);
    }
}
