<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolImage>
 */
class SchoolImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $path = fake()->image(null, 1920, 1080, 'school');
        // $bin = file_get_contents($path);
        //
        // unlink($path);

        return [
            'school_id' => \App\Models\School::factory(),
            'data' => "{{blob}}", // $bin,
        ];
    }
}
