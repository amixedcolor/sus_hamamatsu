<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SelectedFacility>
 */
class SelectedFacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => \App\Models\Booking::factory(),
            'is_having_gym' => fake()->boolean(),
            'is_having_ground' => fake()->boolean(),
            'is_having_parking' => fake()->boolean(),
        ];
    }
}
