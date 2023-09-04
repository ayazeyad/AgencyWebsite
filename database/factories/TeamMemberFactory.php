<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => $this->faker->name,
            'name_ar' => $this->faker->name,
            'position_en' => $this->faker->jobTitle,
            'position_ar' => $this->faker->jobTitle,
            'image' => null,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
