<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('category')->insert([
            ['nom' => 'Category 1'],
            ['nom' => 'Category 2'],
            ['nom' => 'Category 3'],
            ['nom' => 'Category 4'],
            ['nom' => 'Category 5'],
        ]);
    }
}
