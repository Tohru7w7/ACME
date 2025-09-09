<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address')->insert([
                'street_name'=>'Abedul 4637, Colonia Real del Bosque',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('address')->insert([
                'street_name'=>'Cajellón 8',
                'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
