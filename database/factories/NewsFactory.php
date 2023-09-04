<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_en' => $this->faker->sentence,
            'title_ar' => $this->faker->sentence,
            'description_en' => $this->faker->paragraph,
            'description_ar' => $this->faker->paragraph,
            'image' => null, // You can define logic for generating image paths if needed.
        ];
    }
}
