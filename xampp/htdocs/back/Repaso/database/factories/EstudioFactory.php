<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "paterno"=>$this->faker->lastName(),
            "nombre"=>$this->faker->name(),
            "Fecha_nacimiento"=>$this->faker->date()

        ];
    }
}
