<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trRepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('tr_replies')->insert([
            'id' => $i,
            'userId' => $i,
            'threadId' => $i,
            'message' => 'Mengapa Ayam duluan daripada telur',
            'dateIn' => '2021-12-24'
        ]);

        $i = 2;
        DB::table('tr_replies')->insert([
            'id' => $i,
            'userId' => $i,
            'threadId' => $i,
            'message' => 'Problem Yang belum diketahui',
            'dateIn' => '2021-12-25'
        ]);

        $i = 3;
        DB::table('tr_replies')->insert([
            'id' => $i,
            'userId' => $i,
            'threadId' => $i,
            'message' => 'Kenapa Masih Belum Ketemu?',
            'dateIn' => '2021-12-26'
        ]);

        $i = 4;
        DB::table('tr_replies')->insert([
            'id' => $i,
            'userId' => $i,
            'threadId' => $i,
            'message' => 'Kenapa Jodoh saya belum dicetak??',
            'dateIn' => '2021-12-27'
        ]);
    }
}
