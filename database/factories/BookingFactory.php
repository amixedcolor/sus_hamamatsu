<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school_id' => \App\Models\School::factory(),
            'customer_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'date' => fake()->date(),
            'time_start' => fake()->time('H:i'),
            'time_end' => fake()->time('H:i'),
            'purpose_of_use' => fake()->text(128),
            'details' => fake()->text(1024),
        ];
    }
}
