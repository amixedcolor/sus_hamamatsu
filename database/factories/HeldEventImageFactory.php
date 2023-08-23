<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeldEventImage>
 */
class HeldEventImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $path = fake()->image(null, 1920, 1080, 'poster');
        // $bin = file_get_contents($path);
        //
        // unlink($path);

        return [
            'held_event_id' => \App\Models\HeldEvent::factory(),
            'data' => "{{blob}}", // $bin,
        ];
    }
}
