<?php

namespace Database\Factories;

use App\Models\employeeReview;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<employeeReview>
 */
class EmployeeReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'review' => $this->faker->sentence,
            'employee_id' => function () {
                return Employee::factory()->create()->id;
            },
        ];
    }
}
