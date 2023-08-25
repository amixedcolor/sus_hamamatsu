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
        $schools = Models\School::factory(10)
            ->has(Models\SchoolImage::factory(1))
            ->has(Models\Facility::factory(1))
            ->create();

        for ($i = 0; $i < 10; $i++) {
            $bookings = Models\Booking::factory(1)
                ->has(Models\SelectedFacility::factory(1))
                ->create(['school_id' => $schools[$i]->id]);

            $heldEvents = Models\HeldEvent::factory(1)
                ->has(Models\HeldEventImage::factory(1))
                ->hasAttached($bookings)
                ->has()
                ->create(['school_id' => $schools[$i]->id]);
        }
    }
}
