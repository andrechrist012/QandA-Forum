<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class msUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('ms_users')->insert([
            'id' => $i,
            'name' => 'Nur',
            'email' => 'nur@gmail.com',
            'password' => 'nur12345',
            'role' => 'U'
        ]);

        $i = 2;
        DB::table('ms_users')->insert([
            'id' => $i,
            'name' => 'Syah',
            'email' => 'Syah@gmail.com',
            'password' => 'Syah2021',
            'role' => 'U'
        ]);

        $i = 3;
        DB::table('ms_users')->insert([
            'id' => $i,
            'name' => 'Dhany',
            'email' => 'Dhany@gmail.com',
            'password' => 'Dhany2022',
            'role' => 'U'
        ]);

        $i = 4;
        DB::table('ms_users')->insert([
            'id' => $i,
            'name' => 'fahmi',
            'email' => 'fahmi@gmail.com',
            'password' => 'fahmi2021',
            'role' => 'U'
        ]);
    }
}
