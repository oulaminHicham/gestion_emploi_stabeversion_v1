<?php

namespace Database\Seeders;

use App\Models\Emploi_tempe;
use App\Models\Etudient;
use App\Models\Filiere;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\Salle;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Groupe::factory(20)->create();
        Salle::factory(1)->create();
        Filiere::factory(20)->create();
        Module::factory(20)->create();
        Etudient::factory(20)->create();
        Emploi_tempe::factory(20)->create();



    }
}
