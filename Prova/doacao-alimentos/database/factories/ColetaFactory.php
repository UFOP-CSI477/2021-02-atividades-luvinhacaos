<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coleta>
 */
class ColetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantidade' => $this->faker->randomNumber(5),
            'data' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
