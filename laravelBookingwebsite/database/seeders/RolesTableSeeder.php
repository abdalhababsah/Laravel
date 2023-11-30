<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['Name' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['Name' => 'Leaser', 'created_at' => now(), 'updated_at' => now()],
            ['Name' => 'User', 'created_at' => now(), 'updated_at' => now()],
            // Add more roles if needed
        ]);
    }

}
