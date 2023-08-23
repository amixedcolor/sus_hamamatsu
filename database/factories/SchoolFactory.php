<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price_per_hour' => fake()->randomNumber(),
            'rentable_time_start' => fake()->time('H:i'),
            'rentable_time_end' => fake()->time('H:i'),
            'contact' => '電話番号: ' . fake()->phoneNumber() . '\n' . 'E-mail: ' . fake()->email(),
            'terms' => fake()->text(2048),
            'note' => fake()->text(512),
        ];
    }
}
