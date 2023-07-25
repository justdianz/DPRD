<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dapil>
 */
class DapilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => 'DAPIL ' . random_int(1, 100),
            'daerah' => $this->faker->city() . ' - ' . $this->faker->city() . ' - ' . $this->faker->city()
        ];
    }
}