<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlueprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blueprint')->insert([
                'name_blueprint'=>'Contrucción de casa',
                'document'=>'Arreglos exteriores',
                'version'=>2,
                'sheet'=>3,
                'project_id'=>1,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('blueprint')->insert([
                'name_blueprint'=>'Arreglo de interior',
                'document'=>'Arreglos',
                'version'=>4,
                'sheet'=>7,
                'project_id'=>2,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
    }
}
