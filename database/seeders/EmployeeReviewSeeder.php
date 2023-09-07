<?php

namespace Database\Seeders;

use App\Models\employeeReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        employeeReview::factory()->count(10)->create();
    }
}
