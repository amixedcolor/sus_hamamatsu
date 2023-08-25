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
        return [
            'school_id' => \App\Models\School::factory(),
            'data' => file_get_contents('/var/www/html/database/factories/school_imgs/' . rand(0, 9) . '.avif'),
        ];
    }
}
