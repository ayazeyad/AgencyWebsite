<?php

namespace Database\Factories;

use App\Models\job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle,
            'level' => $this->faker->randomElement(['internship', 'entry-level', 'Intermediate', 'Mid-level', 'Senior']),
            'description' => $this->faker->paragraph,
        ];
    }
}
