<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert(
            [
                'name' => "ana",
                'email' => "ana@gmail.com",
                'password' => Hash::make("123"),
                'role' => "user"
            ]
        );
    }
}
