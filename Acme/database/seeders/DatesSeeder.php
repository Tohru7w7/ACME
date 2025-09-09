<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dates')->insert([
                'fecha_actualizacion_ant'=>'2025-09-01',
                'fecha_actualizacion'=>'2025-09-09',
                'fecha_entrega'=>'2025-11-20',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('dates')->insert([
                'fecha_actualizacion_ant'=>'2025-08-11',
                'fecha_actualizacion'=>'2025-09-08',
                'fecha_entrega'=>'2025-12-29',
                'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
