<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);

        // 2. Seed Users
        $this->call(UsersTableSeeder::class);

        // 3. Seed Bookings, Houses, and Reviews
        $this->call(BookingsTableSeeder::class);
        $this->call(HousesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
