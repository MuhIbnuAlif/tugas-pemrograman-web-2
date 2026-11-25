<?php

namespace Database\Factories;

use App\Models\pelanggan; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nik' => fake()->numerify('###########'),
        ];
    }
}
