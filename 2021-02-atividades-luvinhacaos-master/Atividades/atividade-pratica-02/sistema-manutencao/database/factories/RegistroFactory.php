<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->randomDigit(),

            'equipamento_id' => $this->faker->randomDigit(),
            'user_id' => $this->faker->randomDigit(),
            'descricao' => $this->faker->randomLetter(),
            'datalimite' => $this->faker->date(),
            'tipo' => $this->faker->randomDigit()
        ];
    }
}
