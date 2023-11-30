<?php

namespace Database\Seeders;

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
        // 3. Seed Houses
        $this->call(HousesTableSeeder::class);
        // 4. Seed Bookings
        $this->call(BookingsTableSeeder::class);
        // 5. Seed Reviews
        $this->call(ReviewsTableSeeder::class);
    }
}
