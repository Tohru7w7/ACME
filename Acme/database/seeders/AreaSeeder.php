<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('area')->insert([
                'area'=>'Masterpiece01',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('area')->insert([
                'area'=>'Masterpiece02',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
    }
}
