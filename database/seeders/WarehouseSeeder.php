<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('warehouses')->insert([
            'blood_type' => '+O',
            'quantity' => 0 ,
        ]);
        DB::table('warehouses')->insert([
            'blood_type' => '-O',
            'quantity' => 0 ,
        ]);


        DB::table('warehouses')->insert([
            'blood_type' => '+A',
            'quantity' => 0 ,
        ]);
        DB::table('warehouses')->insert([
            'blood_type' => '-A',
            'quantity' => 0 ,
        ]);


        DB::table('warehouses')->insert([
            'blood_type' => '+B',
            'quantity' => 0 ,
        ]);
        DB::table('warehouses')->insert([
            'blood_type' => '-B',
            'quantity' => 0 ,
        ]);


        DB::table('warehouses')->insert([
            'blood_type' => '+AB',
            'quantity' => 0 ,
        ]);
        DB::table('warehouses')->insert([
            'blood_type' => '-AB',
            'quantity' => 0 ,
        ]);

    }
}
