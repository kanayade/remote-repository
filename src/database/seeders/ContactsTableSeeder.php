<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => 'かな',
            'last_name' => 'おくざき',
            'gender' => '2',
            'email' => 'kana@test.com',
            'tel' => '1234',
            'address' => '横浜市鶴見区矢向',
            'detail' => '届けてください',
            'category_id' => 1
        ];
        DB::table('contacts')->insert($param);
    }
}
