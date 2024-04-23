<?php

namespace Database\Factories;

use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudient>
 */
class EtudientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->name(),
            'prenom'=>fake()->lastName(),
            'cin'=>fake()->numberBetween(100000 , 900000),
            'groupe_id'=>Groupe::factory()
        ];
    }
}
