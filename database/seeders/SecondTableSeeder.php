<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondTableSeeder extends Seeder 

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('second_table')->insert([
            ['description' => 'Desc 1', 'first_table_id' => 1],
            ['description' => 'Desc 2', 'first_table_id' => 1],
            ['description' => 'Desc 3', 'first_table_id' => 2],
            ['description' => 'Desc 4', 'first_table_id' => 3],
            ['description' => 'Desc 5', 'first_table_id' => 3],
        ]);
    }
}
