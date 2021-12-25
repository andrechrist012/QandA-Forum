<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('tr_threads')->insert([
            'id' => $i,
            'userId' => $i,
            'title' => 'Bertanya',
            'description' => 'Bertanya Sesuatu',
            'category' => 'Pertanyaan',
            'dateIn' => '2021-12-24'
        ]);

        $i = 2;
        DB::table('tr_threads')->insert([
            'id' => $i,
            'userId' => $i,
            'title' => 'Problem',
            'description' => 'FIX Problem',
            'category' => 'Masalah',
            'dateIn' => '2021-12-25'
        ]);

        $i = 3;
        DB::table('tr_threads')->insert([
            'id' => $i,
            'userId' => $i,
            'title' => 'Mencari',
            'description' => 'Masih Mencari',
            'category' => 'Belum Ketemu',
            'dateIn' => '2021-12-26'
        ]);

        $i = 4;
        DB::table('tr_threads')->insert([
            'id' => $i,
            'userId' => $i,
            'title' => 'Mencari Jodoh',
            'description' => 'Jodoh saya masih belum dicetak',
            'category' => 'Jodoh',
            'dateIn' => '2021-12-27'
        ]);



    }
}
