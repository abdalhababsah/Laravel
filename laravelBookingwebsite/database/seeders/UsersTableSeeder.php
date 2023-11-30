<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'Name' => 'Admin',
                'Contact' => '1234567890',
                'Email' => 'admin@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 1,
            ],
            [
                'Name' => 'Leaser',
                'Contact' => '9876543210',
                'Email' => 'leaser@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 2,
            ],
            [
                'Name' => 'User',
                'Contact' => '5555555555',
                'Email' => 'user@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],

        ]);
    }

}
