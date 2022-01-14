<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin1234',
            'role' => 'A'
        ]);

        DB::table('users')->insert([
            'name' => 'Andre Christ',
            'email' => 'andre@gmail.com',
            'password' => 'andre1234',
            'role' => 'M'
        ]);

        DB::table('users')->insert([
            'name' => 'Ramadhany',
            'email' => 'rama@gmail.com',
            'password' => 'rama12345',
            'role' => 'M'
        ]);

        DB::table('users')->insert([
            'name' => 'Renaldy',
            'email' => 'renaldy@gmail.com',
            'password' => 'renaldy1234',
            'role' => 'M'
        ]);

        DB::table('tr_threads')->insert([
            'userId' => 2,
            'title' => 'Javascript method',
            'description' => 'Witch Javascript method should i learn for apply front-end intern?',
            'category' => 'coding',
            'dateIn' => '2022-01-04'
        ]);

        DB::table('tr_threads')->insert([
            'userId' => 3,
            'title' => 'Background page',
            'description' => 'How to change background color using css?',
            'category' => 'coding',
            'dateIn' => '2022-01-04'
        ]);

        DB::table('tr_replies')->insert([
            'userId' => 4,
            'threadId' => 1,
            'message' => 'get api method is important',
            'dateIn' => '2021-12-24'
        ]);

        DB::table('tr_replies')->insert([
            'userId' => 2,
            'threadId' => 2,
            'message' => 'use background-color',
            'dateIn' => '2021-12-24'
        ]);
    }
}
