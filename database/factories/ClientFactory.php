<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'codeClient' => rand(100000, 340000),
            'email' =>$this->faker->unique()->safeEmail(),
            'mode_contact' => "Facebook",
            'date_contact' => $this->faker->date(now()),
            'premimum' => "oui",
        ];
    }
}
