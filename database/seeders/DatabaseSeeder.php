<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Models\School::factory(10)
            ->has(Models\SchoolImage::factory(1))
            ->has(Models\Facility::factory(1))
            ->create();

        $bookings = Models\Booking::factory(10)
            ->has(Models\SelectedFacility::factory(1))
            ->create();

        Models\HeldEvent::factory(10)
            ->has(Models\HeldEventImage::factory(1))
            ->hasAttached($bookings)
            ->create();
    }
}
