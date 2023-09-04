<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->image,
            'name_en' => $this->faker->company,
            'name_ar' => $this->faker->company,
            'google_play_link' => $this->faker->url,
            'app_store_link' => $this->faker->url,
        ];
    }
}
