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
        \App\Models\Booking::factory(10)->create();
        \App\Models\Facility::factory(10)->create();
        \App\Models\HeldEvent::factory(10)->create();
        \App\Models\HeldEventImage::factory(10)->create();
        \App\Models\School::factory(10)->create();
        \App\Models\SchoolImage::factory(10)->create();
        \App\Models\SelectedFacility::factory(10)->create();
    }
}
