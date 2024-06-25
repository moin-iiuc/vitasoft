<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\units>
 */
class UnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => $this->faker->name(),
            'code' => $this->faker->randomLetter(),
            'for' => $this->faker->randomLetter(),
            'base_unit' => 'piece',
            'operator' =>'*',
            'operator_value' =>'1',
            'is_active' => '1',

        ];
    }
}