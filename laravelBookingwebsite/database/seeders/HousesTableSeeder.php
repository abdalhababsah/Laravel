<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('houses')->insert([
            [
                'Address' => '123 Main Street',
                'Type' => 'Apartment',
                'NumberOfRoom' => 3,
                'NumberOfToilet' => 2,
                'NumberOfBelcony' => 1,
                'Rent' => 1500,
                'Image' => 'house1.jpg',
                'Status' => 'available',
                'Location' => 'City Center',
                'UserID' => 1, // Example UserID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more houses as needed
        ]);
    }
}
