<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
                'RFC'=>'CEV030925D69',
                'user_id'=>1,
                'address_id'=>1,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('customer')->insert([
                'RFC'=>'PAM020309C40',
                'user_id'=>2,
                'address_id'=>2,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
    }
}
