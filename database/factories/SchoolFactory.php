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
            'name' => fake()->city() . '立' . str_replace('市', '', fake()->city()) . ['小学', '中学', '高等学'][rand(0, 2)] . '校',
            'price_per_hour' => fake()->randomNumber(4) / 2,
            'rentable_time_start' => fake()->time('H:i'),
            'rentable_time_end' => fake()->time('H:i'),
            'contact' => '担当者: ' . fake()->kanaName() . "\n" . '電話番号: ' . fake()->phoneNumber() . "\n" . 'E-mail: ' . fake()->email(),
            'terms' => fake()->text(2048),
            'note' => fake()->text(512),
        ];
    }
}
