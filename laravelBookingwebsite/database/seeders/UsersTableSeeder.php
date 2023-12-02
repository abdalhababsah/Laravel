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
                'Name' => 'ahmad',
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
                'Name' => 'mohammad',
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
                'Name' => 'yasen',
                'Contact' => '5555555555',
                'Email' => 'user@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],
            [
                'Name' => 'yazan',
                'Contact' => '44444444',
                'Email' => '4user@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 1,
            ],
            [
                'Name' => 'omama',
                'Contact' => '33454636',
                'Email' => 'usebr@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 2,
            ],
            [
                'Name' => 'khaled',
                'Contact' => '5555555555',
                'Email' => 'usefr@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],
            [
                'Name' => 'abd',
                'Contact' => '454534534',
                'Email' => 'userr@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],
            [
                'Name' => 'malek',
                'Contact' => '5344354534',
                'Email' => 'usber@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],
            [
                'Name' => 'noor',
                'Contact' => '2343235',
                'Email' => 'usbegr@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 3,
            ],
            [
                'Name' => 'jeso',
                'Contact' => '563634634634',
                'Email' => 'usbber@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 2,
            ],
            [
                'Name' => 'nahed',
                'Contact' => '452525',
                'Email' => 'usbbcer@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 2,
            ],
            [
                'Name' => 'tassen',
                'Contact' => '563634634634',
                'Email' => 'usbrber@example.com',
                'EmailVerifiedAt' => now(),
                'Password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'RoleID' => 2,
            ],

        ]);
    }
}
