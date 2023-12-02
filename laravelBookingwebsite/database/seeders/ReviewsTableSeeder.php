<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{

    public function run()
    {
        // Generating dummy reviews
        DB::table('reviews')->insert([
            [
                'Opinion' => 'Great place to stay!',
                'UserID' => 1,
                'Rate' => 3,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Not bad, could be better.',
                'UserID' => 2,
                'Rate' => 2,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Amazing experience!',
                'UserID' => 3,
                'Rate' => 5,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Could use some improvements.',
                'UserID' => 4,
                'Rate' => 2,
                'HouseID' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Perfect for a weekend getaway!',
                'UserID' => 5,
                'Rate' => 4,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'niceee place to stay!',
                'UserID' => 6,
                'Rate' => 3,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => ' could be better.',
                'UserID' => 7,
                'Rate' => 2,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'grate experience!',
                'UserID' => 8,
                'Rate' => 5,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Could use some serves.',
                'UserID' => 9,
                'Rate' => 2,
                'HouseID' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Opinion' => 'Perfect for a weekend getaway!',
                'UserID' => 10,
                'Rate' => 4,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Add more dummy reviews as needed
        ]);
    }
}
