<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project')->insert([
                'user_id'=>1,
                'date_id'=>1,
                'area_id'=>1,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('project')->insert([
                'user_id'=>2,
                'date_id'=>2,
                'area_id'=>2,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
    }
}
