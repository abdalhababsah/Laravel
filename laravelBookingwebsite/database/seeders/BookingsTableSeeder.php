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
                'RenterID' => 2, // Example RenterID
                'HouseID' => 1, // Example HouseID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more bookings as needed
        ]);
    }

}
