<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2023-12-01',
                'LeavingTime' => '2023-12-15',
                'RenterID' => 2,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2023-12-05',
                'LeavingTime' => '2023-12-20',
                'RenterID' => 3,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2023-12-10',
                'LeavingTime' => '2023-12-25',
                'RenterID' => 4,
                'HouseID' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2023-12-15',
                'LeavingTime' => '2023-12-30',
                'RenterID' => 5,
                'HouseID' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2023-12-20',
                'LeavingTime' => '2024-01-05',
                'RenterID' => 6,
                'HouseID' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2024-12-01',
                'LeavingTime' => '2024-12-15',
                'RenterID' => 3,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2024-12-05',
                'LeavingTime' => '2024-12-20',
                'RenterID' => 6,
                'HouseID' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2024-12-10',
                'LeavingTime' => '2024-12-25',
                'RenterID' => 7,
                'HouseID' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2024-12-15',
                'LeavingTime' => '2024-12-30',
                'RenterID' => 8,
                'HouseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'BookingStatus' => 1,
                'ArravingTime' => '2025-12-20',
                'LeavingTime' => '2025-01-05',
                'RenterID' => 3,
                'HouseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more bookings as needed
        ]);
    }
}
