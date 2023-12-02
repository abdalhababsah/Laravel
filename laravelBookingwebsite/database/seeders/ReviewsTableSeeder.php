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
                'UserID' => 1, // Replace with the appropriate User ID
                'Rate' => 3, // Replace with the appropriate User ID
                'HouseID' => 1, // Replace with the appropriate House ID
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Add more dummy reviews as needed
        ]);
    }
}
