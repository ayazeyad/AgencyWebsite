<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->word,
            'name_en' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'active' => $this->faker->boolean,
            'description_en' => $this->faker->sentence,
            'description_ar' => $this->faker->sentence,
        ];
    }
}
