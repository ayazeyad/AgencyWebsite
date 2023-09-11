<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client>
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
            'facebook' => $this->faker->company,
            'instagram' => $this->faker->company,
            'website' => $this->faker->company,
            'play-store' => $this->faker->company,
            'app-store' => $this->faker->company,
        ];
    }
}
