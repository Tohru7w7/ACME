<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
                'name'=>'Joselin',
                'lastname'=>'Cera',
                'number'=>'6361121675',
                'level'=>'1',
                'email'=>'joselinvega492@gmail.com',
                'password'=>Hash::make('1234'),
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('users')->insert([
                'name'=>'Fernando',
                'lastname'=>'Palma',
                'number'=>'6361284704',
                'level'=>'2',
                'email'=>'palma@gmail.com',
                'password'=>Hash::make('1234'),
                'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
