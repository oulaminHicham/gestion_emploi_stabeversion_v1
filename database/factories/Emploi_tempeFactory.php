<?php

namespace Database\Factories;

use App\Models\Groupe;
use App\Models\Module;
use App\Models\Salle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emploi_tempe>
 */
class Emploi_tempeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descreption'=>fake()->paragraph(),
            'joure'=>fake()->randomElement(['lundi' , 'mardi' , 'mercredi']),
            'horaire'=>'08:00-09:00',
            'salle_id'=>Salle::factory(),
            'groupe_id'=>Groupe::factory(),
            'module_id'=>Module::factory()
        ];
    }
}
