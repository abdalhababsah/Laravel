<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HousesTableSeeder extends Seeder
{
    public function run()
    {

        $imageIndices = range(1, 24);

        // Shuffle the array
        shuffle($imageIndices);

        // Iterate over each house
        for ($i = 0; $i < 16; $i++) {
            // Take one image index from the shuffled array
            $imageIndex = array_shift($imageIndices);

            // Construct the image path
            $imagePath = 'images/home/house' . $imageIndex . '.jpg';

            // Insert sample house data
            DB::table('houses')->insert([
                'Address' => 'Sample Address ' . ($i + 1),
                'Type' => 'Sample Type',
                'NumberOfRoom' => rand(1, 5),
                'NumberOfToilet' => rand(1, 3),
                'NumberOfBelcony' => rand(0, 2),
                'Rent' => rand(800, 2500),
                'Image' => $imagePath,
                'Status' => 'available',
                'Location' => 'Sample Location',
                'UserID' => rand(1, 12),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Output a message indicating that the seeder ran successfully
        $this->command->info('Houses table seeded successfully!');
    }
}
