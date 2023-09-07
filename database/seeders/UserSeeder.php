<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'aya',
            'email' => 'ayazeyad@gmail.com',
            'password'=> '$10$FbyzeS/zxx6rO6QtIdjU/./AlWpuLUDdYzHnsxhqqo6OdX786Ju0K',
        ]);

        User::factory(10)->create();
    }
}
